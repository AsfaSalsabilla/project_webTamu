<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="logo.png" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --dark-green: #424A3F;
      --sage-green: #9AA497;
      --light-grey: #D6DEDA;
      --blush-pink: #EFE1DC;
      --soft-pink: #DDBEB5;
      --dusty-rose: #A58276;
    }
    body {
      min-height: 100vh;
      display: flex;
      background-color: var(--light-grey);
    }

    .sidebar {
      width: 250px;
      background-color: var(--dark-green);
      color: white;
      flex-shrink: 0;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: var(--sage-green);
      display: block;
    }

    .content {
      flex-grow: 1;
      background-color: var(--blush-pink);
    }

    .topbar {
      background-color: var(--soft-pink);
      padding: 1rem;
      border-bottom: 1px solid var(--dusty-rose);
    }

    .dashboard-card {
      border-radius: 1rem;
      box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }

    .btn-hapus {
      background-color: var(--dusty-rose);
      color: white;
      border: none;
    }

    .btn-hapus:hover {
      background-color: #8a6a5b;
      color: white;
    }

    .sidebar .nav-link {
      color: white; /* dark green sebagai warna default */
      transition: background-color 0.3s, color 0.3s;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      text-decoration: none;
    }
    
    .sidebar .nav-link:hover {
      background-color: #A58276; /* dusty pink saat hover */
      color: white;
    }

    
  </style>
</head>
<body>
