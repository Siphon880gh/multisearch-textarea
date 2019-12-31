<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Demo: Multisearch Textarea</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- jQuery and Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <style>
    textarea  {
      width: 100%;
      height: 200px;
      padding: 5px;
      border: 2px solid gray;
      resize: vertical;
    }
    .spacer {
        width: 1px;
        height: 10px;
    }
    </style>

    <script src="js/libs/multisearch-textarea.js"></script>
    <script>
    $(()=>{
      MultisearchTextarea({
        $input: $("#jump-to-line"),
        $searchBtn: $("#jump-to-line-btn"),
        $clearBtn: $("#jump-to-line-clear"),
        $textarea: $("#textarea")
      });

      // Demo purposes
      $("jump-to-line").val("a").trigger("keyup");
    })
    </script>

</head>
    <body>
        <div class="container" style="position:relative;">
          <h3>Demo: Multisearch Textarea</h3>

          <textarea id="textarea" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
a
b
a
c
a
d
e</textarea>
          <div class="spacer"></div>
          
          <div id="info-jump-line-container">
              <button id="jump-to-line-btn" style="cursor: pointer;"><span class="fa fa-file-text-o" style="cursor: pointer;"></span> Find text</button>
              <input id="jump-to-line" class="toolbar" type="text" placeholder=""
              autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="width:180px;"/>
              <span>&nbsp;</span>
              <button id="jump-to-line-clear">Clear</button>
          </div> <!-- /#info -->

          <div class="spacer"></div>
          <div class="spacer"></div>
          <div class="text-muted">ReadMe.md is <a href="README.md" target="_blank">here</a>. Repository link is <a href="https://github.com/Siphon880gh/multisearch-textarea" target="_blank">here</a>.</div>
        </div> <!-- /.container -->
        
        <!-- Designer: FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

    </body>
</html>