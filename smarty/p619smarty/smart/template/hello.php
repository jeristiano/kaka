<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
       {$x=60}
       {if $x eq 50}
       <b>不及格</b>
       {elseif $x eq 60}
       <b>及格</b>
       {else}
       <b>我也不知道</b>
       {/if}
    </body>
</html>