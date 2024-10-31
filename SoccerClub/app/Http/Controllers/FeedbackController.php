<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{

    public function show()
    {
        return view('feedback');
    }

    public function create(Request $request)
    {
        if (auth()->check()) {
            // Người dùng đã đăng nhập
            $user = auth()->user();
            $feedback = new Feedback();
            $feedback->user_id = auth()->user()->id;
            $feedback->user_name = $user->username; // Sử dụng tên của người dùng đã đăng nhập
            $feedback->feedback_content = $request->input('feedback_content');
            $feedback->save();
            return response()->json(['message' => 'Cảm ơn bạn đã gửi phản hồi.']);
        } else {
            // The user is not logged in
            return response()->json(['message' => 'Bạn cần đăng nhập để gửi phản hồi.'], 403);
        }
    }
}

