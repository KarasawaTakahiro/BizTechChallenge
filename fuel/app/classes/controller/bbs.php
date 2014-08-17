<?php
///use \Model\Biztechpre;

class Controller_Bbs extends Controller
{
    public function action_page($page=1)
    {
        $data['title'] = 'Biztech Pre BBS';
        $data['page'] = $page;
        return Response::forge(View::forge('biztechpre/bbs', $data));
    }
}
