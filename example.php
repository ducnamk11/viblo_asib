<?php

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

/**
 * seed role, user and permission by:
 * php artisan db:seed
 * 
 * super-admin account
 * email: admin@gmail.com
 * pass: 123
 */

/**
 * @todo Cách viết clean code
 */


/**
 * Không nên viết như này
 *
 */
function todoWrong()
{
    $a = 'b'; // phải thêm một newline trước khối code tiếp theo
    foreach ([$a, $a] as $item ) {
        echo $item;
    }// Sau kết thúc khối lệnh phải thêm 1 newline
    return $a; // return nên để ở dòng đơn
}

/**
 * Nên viết như này
 *
 */
function todoRight()
{
    $a = 'b';

    foreach ([$a, $a] as $item) {
        echo $item;
    }

    return $a;
}

/**
 * Không nên viết như này
 *
 */
function publishWrong(Request $request,$_id)
{
    $post = Post::findOrFail($_id);
    if ($post->status == 1) { // khối code cần được phải tách riêng và phải rõ ràng
        $post->status = 0; // Tại sao phải đảo ngược trạng thái như này
    } else {
        $post->status = 1; } // 1 là trạng thái gì, không đóng ngoặc trong dòng mới
    $post->update(array_merge($request->all(), [
        'find_key' => $post->find_key,
        'status' => $post->status,
        'slug' => Str::slug($request->title),
    ]));

    return redirect()->route('admin.post');
}

/**
 * Nên viết như này
 * 
 */
function publishRight(Request $request,$_id)
{
    $post = Post::findOrFail($_id);

    if ($post->status == Post::PUBLISHED) {
        $post->status = Post::NOT_PUBLISHED; // mà nếu muốn xét duyệt như này thì nên tạo thêm một trạng thái nữa trong model và lúc user upload bài lên thì nó mặc định là chờ duyệt luôn
    }

    $post->update(array_merge($request->all(), [
        'find_key' => $post->find_key,
        'status' => $post->status,
        'slug' => Str::slug($request->title),
    ]));

    return redirect()->route('admin.post');
}