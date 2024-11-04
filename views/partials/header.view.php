<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
    <!-- <link rel="stylesheet" href="/../../public/css/style.css"> -->
     <style>
         * {
            box-sizing: border-box;
         }

         body {
            height:100vh;
            display:grid;
            grid-template-rows: auto 1fr auto;
         }

         header, main, footer {
            width:920px;
            margin-inline:auto;
         }

         nav {
            display: flex;
            justify-content: space-between;
         }
        details {
        border: 1px solid #aaa;
        border-radius: 4px;
        padding: 1em 1em;
        margin-block: 1em;
        max-width: 920px;

        }

        summary {
        font-weight: bold;
        margin: -0.5em -0.5em 0;
        padding: 0.5em;
        }

        details[open] {
        padding: 0.5em;
        }

        details[open] summary {
        border-bottom: 1px solid #aaa;
        margin-bottom: 0.5em;
        }

        div {
         margin-block: 1rem; 
        }

        input, button {
         padding: 0.5em;
         border: 1px solid #ccc;
         font-size: 1em;
         line-height: 1.5;
         border-radius: 0.5em;
         width: 920px;
        }

        button {
         background-color: aqua; 
        }

     </style>
</head>
<body>