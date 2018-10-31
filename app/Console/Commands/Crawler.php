<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Sunra\PhpSimple\HtmlDomParser;
use App\Models\Post;
use App\Models\Agency;

class Crawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:name {source}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Crawler description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $action = $this->argument('source');

        if($action == 'agencyhomedy'){
            $this->homedyAgency();
        } else if( $action == 'postMogi' ){
            $this->postMogi();
        }

    }

    public function postMogi()
    {
        do{
            $agencys = Agency::where('scan',false)->where('url', 'like', 'https://mogi.vn%')->get()->first();
            if($agencys){
                $page = 1;
                while (true) {
                    $totalPost = 0;
                    $linkagency = $agencys->url.'?rent=False&cp='.$page;

                    $page++;
                }
            }
        }  while ($agencys);
        
    }

    public function homedyAgency()
    {
        $page = 'https://homedy.com/danh-sach-nha-moi-gioi?src=mega_menu&p=';
        $i = 1050;
        do {
            $url = $page.$i;
            echo $url.PHP_EOL;
            $dom = file_get_contents( $url );
            $dom = HtmlDomParser::str_get_html($dom);
            $users = $dom->find('.content-agency .items');

            if(  count($users) > 0 ){
                foreach ($users as $user) {
                    $new = [];
                    $data = HtmlDomParser::str_get_html($user->innertext);
                    $new['phone']    = trim(html_entity_decode(@$data->find('.content-right-phone a',0)->plaintext));
                    if( strpos($new['phone'], '@') !== false) {$new['email'] = $new['phone'] ;$new['phone']  = null;}
                    $new['url']      = 'https://homedy.com'.$data->find('.content-name a',0)->href;
                    $new['name']     = trim(html_entity_decode($data->find('.content-name a',0)->plaintext));
                    $new['avatar']   = $data->find('.content-image',0)->attr['style'];
                    $new['avatar']   = str_replace("background: url('", '', $new['avatar']);
                    $new['avatar']   = str_replace("')", '', $new['avatar']);
                    $new['scan']   = false;
                    $new['total_post']     = @$data->find('.content-center-post .up',0)->plaintext;
                    $exit = Agency::where('phone',$new['phone'])->exists();
                    if(!$exit){
                        var_dump($new);
                        $save = new Agency();
                        $save->insert([$new]);
                    }
                    // echo PHP_EOL;
                }
            }

            $i++;
        } while (count($users) > 0);
    }

    public function mogiAgency()
    {
        $page = 'https://mogi.vn/tim-moi-gioi?cp=';
        $i = 1;
        do {
            $url = $page.$i;
            echo $url.PHP_EOL;
            $dom = file_get_contents( $url );
            $dom = HtmlDomParser::str_get_html($dom);
            $users = $dom->find('#results .agent-item');

            if(  count($users) > 0 ){
                foreach ($users as $user) {
                    $new = [];
                    $data = HtmlDomParser::str_get_html($user->innertext);
                    $srtphone = $data->find('.agent-item-mobile span',0);
                    $new['phone']    = preg_replace('/\D/', '', $srtphone);
                    $new['url']      = 'https://mogi.vn'.$data->find('.agent-item-info a',0)->href;
                    $new['name']     = $data->find('.agent-item-info a h2',0)->innertext;
                    $new['avatar']   = $data->find('.agent-item-avatar img',0)->src;
                    if($new['avatar'] == "/content/images/no-avatar.jpg") $new['avatar'] = 'https://mogi.vn'.$new['avatar'];
                    $new['scan']   = false;
                    $new['location']     = @$data->find('.agent-item-zone',0)->plaintext;
                    if($new['location'])  $new['location']   = str_replace(' : ', '', $new['location']);
                    $new['total_post']     = @$data->find('.agent-item-counter strong',0)->plaintext;

                    $exit = Agency::where('phone',$new['phone'])->exists();
                    if(!$exit){
                        var_dump($new);
                        $save = new Agency();
                        $save->insert([$new]);
                    }
                }
            }

            $i++;
        } while (count($users) > 0);
    }
}
