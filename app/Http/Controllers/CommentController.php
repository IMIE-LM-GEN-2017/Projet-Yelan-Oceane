<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Repositories\CommentRepository;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    protected $commentRepository;

    protected $bnrPerPage = 4;

    public function __construct(commentRepository $commentRepository)
    {
        $this->middleware('auth', ['except' =>'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->commentRepository = $commentRepository;
    }

    public function index()
    {
        $comments = $this->commentRepository->getPaginate($this->nbrPerPage);
        $links = $comments->render();

       // return view('comments.list', compact('comments', 'links));
    }

    public function create()
    {
        return view('comments.add');
    }

    public function store(CommentRequest $request)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $this->commentRepository->store($inputs);

        return redirect(route('comment.index'));
    }

    public function destroy($id)
    {
        $this->commentRepository->destroy($id);

        return redirect()->back();
    }

}
