<?php

// PAGES
if (isset($_SESSION['auth'])) {
    get('/', '/view/home');

    get('/profile/edit', '/view/user/edit');
    get('/profile', '/view/user/profile');
    get('/profile/$userID', '/view/user/profile');

    get('/blog/create', '/view/blog/create');
    get('/blog/$blogID', '/view/blog/show');

    get('/post/create', '/view/post/create');
    get('/post/$postID', '/view/post/show');

    get('/chat', '/view/chat/chat');
    get('/chat/$userID', '/view/chat/chat-single');

    get('/search', '/view/search/search');

    get('/logout', '/core/logout');
} else {
    get('/', '/view/welcome');
    get('/login', '/view/login');
    get('/signup', '/view/signup');
    get('/password-reset', '/view/user/password-reset');
}


// API
if (isset($_SESSION['auth'])) {
    // Get user details
    any('/api/user', '/api/user');
    any('/api/user/$userID', '/api/user');

    // To follow & Unfollow a user
    any('/api/follow/$userID', '/api/follow');

    // Post
    any('/api/post', '/api/post');
    any('/api/post/$postID', '/api/post');
    any('/api/post-comment', '/api/post-comment');
    any('/api/post-comment/$commentID', '/api/post-comment');

    // Blog
    any('/api/blog', '/api/blog');
    any('/api/blog/$blogID', '/api/blog');
    any('/api/blog-comment', '/api/blog-comment');
    any('/api/blog-comment/$commentID', '/api/blog-comment');

    // Chat
    any('/api/chat', '/api/chat');
    any('/api/chat/$userID', '/api/chat');

    // Search
    any('/api/search', '/api/search');
    any('/api/search/$search', '/api/search');

    // Home
    any('/api/home/$type/$limit', '/api/home');
} else {
    any('/api/signup', '/api/signup');
    any('/api/login', '/api/login');
    any('/api/user', '/api/user');
}


any('/404', '/view/404');