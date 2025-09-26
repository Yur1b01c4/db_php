<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>db_php</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

<main>
  <figure>
    <picture>
      <source  media="(min-width: 768px)"
              srcset="//my-assets.netlify.com/codepen/dailyui-001/img.png     340w,
                      //my-assets.netlify.com/codepen/dailyui-001/img@2x.png  680w,
                      //my-assets.netlify.com/codepen/dailyui-001/img@3x.png 1020w"
               sizes="360px" />
      <source srcset="//my-assets.netlify.com/codepen/dailyui-001/img-small.png     340w,
                      //my-assets.netlify.com/codepen/dailyui-001/img-small@2x.png  680w,
                      //my-assets.netlify.com/codepen/dailyui-001/img-small@3x.png 1020w"
               sizes="(min-width: 320px) 290px,
                      (min-width: 480px) 435px
                      (min-width: 640px) 580px" />
      <img       src="//my-assets.netlify.com/codepen/dailyui-001/img.png"
                 alt="Citymap illustration" />
    </picture>
  </figure>
  <div class="headline">
    <h2 class="text-headline">Vino Blanco</h2>
    <h3 class="text-subheadline">The Restaurant Newsletter</h2>
  </div>
  <form method="POST" action="send_form.php">
    <span>
      <label for="nome" class="text-small-uppercase">nome</label>
      <input class="text-body" name="nome" type="text" required>
    </span>
    <span>
      <label for="idade" class="text-small-uppercase">idade</label>
      <input class="text-body" name="idade" type="number" required>
    </span>
    <span>
      <label for="email" class="text-small-uppercase">Email</label>
      <input class="text-body" name="email" type="email" required>
    </span>
    <button class="text-small-uppercase" id="submit" type="submit" value="Subscribe now">Enviar</button>
  </form>
</main>
</body>
<script src="/js/javascript.js"></script>
</html>