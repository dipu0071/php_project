<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NotesNExam Blog Posts</title>
    <link rel="stylesheet" href="style.css">
    <style>
      /* Inline CSS for demonstration purposes */
      body {
          font-family: Arial, sans-serif;
          margin: 10px;
          background: #f9f9f9;
      }
      h1 {
          color: #333;
      }
      .blog-post {
          border-bottom: 1px solid #ddd;
          margin-bottom: 20px;
          padding-bottom: 20px;
      }
      .blog-post h2 {
          color: #0066cc;
      }
      .blog-post small {
          color: #888;
      }
    </style>
</head>
<body>
    <h1>Latest Blog Posts</h1>
          <?php include "fetch_blog.php"; ?>

   </body>
</html>