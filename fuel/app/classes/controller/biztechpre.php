<?php
use \Model\Biztechpre;

class Controller_Biztechpre extends Controller
{
    public function action_index()
    {
        $data['title'] = 'BizTech Pre';
        $data = array('title' => 'BizTech Pre',
                      'name' => Cookie::get('name'),
                      'mail' => Cookie::get('mail'),
                     );
        return Response::forge(View::forge('biztechpre/index', $data));
    }

    public function action_bbs($page=1)
    {
        $data = array('title' => 'Biztech Pre BBS',
                      'page'  => $page,
                      'name' => Cookie::get('name'),
                      'mail' => Cookie::get('mail'),
                      );
        if($page <= 0){
            $page = 1;
        }
        return Response::forge(View::forge('biztechpre/bbs', $data));
    }

    public function post_comment()
    {
        $post = Input::post();
        if(!empty($post)){
            // database
            $query = DB::insert('posting')
                ->columns(array('name', 'mail_address', 'comment', 'post_time'))
                ->values(array($post['name'], $post['mail'], $post['comment'], date('Y-m-d H:i:s')))
                ->execute();
            Cookie::set('name', $post['name']);
            Cookie::set('mail', $post['mail']);
            Response::redirect("bbs/{$post['page']}");
        }
        Response::redirect('bbs/1');
    }

    public function post_login(){
        $post = Input::post();
        if(!empty($post)){
            Cookie::set('name', $post['name']);
            Cookie::set('mail', $post['mail']);
        }
        Response::redirect('bbs/1');
    }

    public function action_404()
    {
        return Response::forge(Presenter::forge('biztechpre/404'), 404);
    }

}

