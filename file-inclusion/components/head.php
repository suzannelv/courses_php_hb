<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <base/>：HTML <base> 元素 指定用于一个文档中包含的所有相对 URL 的根 URL。一份中只能有一个 <base> 元素。-->
  <!-- <base href="/file-inclusion/" /> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <title>
    <?php
    // 1-version avec if:
    // if(isset($title)) {
    //     echo $title;
    // } else {
    //     echo 'defalt';
    // };

    // 2-version ternaire:
    // echo isset($title) ? $title : 'defalt';

    // 3-opérateur null coalescent (空值合并运算符（??）)
    // ??可以检查变量是否定义，是否null
    echo $title ?? "defalt";
    ?>
  </title>
  <style>
    img{
      width:100%;
      /* height:300px !important; */
      object-fit: cover;
    }
  </style>
</head>
<body>

<header>
  <?php
  // __DIR__ : 转换成相对绝对路径。
  require_once __DIR__ . "/navbar.php";
    ?>
</header>