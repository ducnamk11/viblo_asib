<?php

/**
 * @todo Đọc file này
 */

/**
 * Function user() đã được thêm vào tại app\Helpers\Authenticatable.php
 * Chức năng trả về model user đã đăng nhập hoặc null nếu chưa đăng nhập
 * Với mọi hành động đến từ user này có thể thông qua hàm này
 */

/**
 * Lấy tất cả post từ user này
 */
$posts = user()->posts()->get();

/**
 * Thêm một post mới
 */
$post = user()->posts()->create(request()->all());

/**
 * Lấy ra hết comment
 */
$comments = user()->comments()->with('posts')->get();

/**
 * Xóa đi 1 post nào đó của user đấy
 */
user()->posts()->where('_id', $id)->delete();