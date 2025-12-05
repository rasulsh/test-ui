<?php

/**
 * Admin Panel Demo - Bootstrap 5
 * 
 * This is a simplified demonstration of the admin panel.
 * In a real Laravel application, this would be handled by the Laravel router.
 */

// For demonstration purposes, we'll directly include the dashboard view
$viewPath = __DIR__ . '/../resources/views/admin/dashboard/index.blade.php';
$layoutPath = __DIR__ . '/../resources/views/admin/layouts/app.blade.php';

// Simple template rendering function
function renderView($layoutPath, $viewPath) {
    // Read the layout
    $layout = file_get_contents($layoutPath);
    
    // Read the content view
    $content = file_get_contents($viewPath);
    
    // Extract content between @section('content') and @endsection
    preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/s', $content, $matches);
    $contentHtml = isset($matches[1]) ? trim($matches[1]) : '';
    
    // Replace @yield('content') with actual content
    $output = str_replace("@yield('content')", $contentHtml, $layout);
    
    // Replace @yield('title', 'Dashboard') with title
    preg_match('/@section\([\'"]title[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]\)/', $content, $titleMatches);
    $title = isset($titleMatches[1]) ? $titleMatches[1] : 'Dashboard';
    $output = preg_replace("/@yield\('title',\s*'[^']+'\)/", $title, $output);
    
    // Remove remaining Blade directives
    $output = preg_replace('/@extends\([^\)]+\)/', '', $output);
    $output = preg_replace('/@section\([^\)]+\)/', '', $output);
    $output = preg_replace('/@endsection/', '', $output);
    $output = preg_replace('/@yield\([^\)]+\)/', '', $output);
    
    // Replace {{ date('Y') }} with actual year
    $output = str_replace("{{ date('Y') }}", date('Y'), $output);
    
    return $output;
}

// Render and output the view
echo renderView($layoutPath, $viewPath);
