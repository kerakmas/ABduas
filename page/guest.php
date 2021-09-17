<main data-aos="flip-left" class="main">
    <section class="head">
        <h2 class="head__title">Гостевая книга</h2>
        <p class="head__date"><? echo 'Today  ' . date(' d  ') . date(' M  ') . date('  Y ') . '  year'?></p>
    </section>
    <form action="" class="form" method="post">
        <label class="form__label">
            <span class="form__text">Введите имя</span>
            <input type="text" class="form__input" name="title">
        </label>
        <label class="form__label">
            <span class="form__text">Оставте отзыв</span>
            <textarea class="form__input" name="descr"></textarea>
        </label>
        <?
      if(isset($_POST['button1'])) {
          echo "This is Button1 that is selected";
      }else{
        echo "";
      }
  ?>
        <button class="form__btn" name="button1">Отправить</button>
    </form>
    <div class="comments">
        <div class="comments__item">
            <p class="comments__item-time"><?
            date_default_timezone_set('
            Central Asia/Tashkent');
            echo date('h:m')?></p>
            <section class="comments__body">
                <div class="comments__head">
                    <h2 class="comment__head-title">Имя пользователя</h2>
                    <img src="/img/1.jpg" alt="" class="comments__head-img">
                </div>
                <p class="comments__body-descr">Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Ведущими всеми речью большой алфавит одна заголовок там своих решила.</p>
                <div class="comments__footer">
                    <a href="#" class="comments__footer-link"><i class="fal fa-edit"></i></a>
                    <a href="#" class="comments__footer-link"><i class="fal fa-trash"></i></a>
                </div>
                


        </div>
    </div>
</main>