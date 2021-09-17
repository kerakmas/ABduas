
<main data-aos="flip-left" class="main">
    <section class="head">
        <h2 class="head__title">Таблица умножения</h2>
        <p class="head__date"><? echo 'Today  ' . date(' d  ') . date(' M  ') . date('  Y ') . '  year'?></p>
    </section>
    <form action="" class="form form__table" method="post">
        <label class="form__label">
            <span class="form__text">Количество колонок</span>
            <input type="text" class="form__input" name="col">
        </label>
        <label class="form__label">
            <span class="form__text">Количество строк</span>
            <input type="text" class="form__input" name="row">
        </label>
        <button class="form__btn">Отправить</button>
    </form>
    <div class="table">
        <div class="table__row">
            <div class="table__col"></div>
        </div>
    </div>
  
</main>
<script type="text/javascript">
    const formTable = document.querySelector('.form__table')
    const table = document.querySelector('.table')
    formTable.addEventListener('submit', function (event){
        event.preventDefault();
        // console.log('fafadgan');
        fetch('./components/create-table.php', {
            method:'post',
            body: new FormData(this)
        })
        .then(res => res.text())
        .then(jav => table.innerHTML = jav)
    })
</script>