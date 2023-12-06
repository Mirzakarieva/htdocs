<main>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Yangi guruh qo'shish</h3>
            <a class="create__btn" href=""> <i class='bx bx-arrow-back'></i>Qaytish</a>

        </div>

        <form class="create__inputs" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
           
            <strong> Nomi :</strong>
            <input type="text" name="name" class="form-control"> <br>

            <strong> Rasmi :</strong>
            <input type="file" name="img" class="form-control"> <br>

            <input type="submit" value="Qo`shish">

        </form>
    </div>

</div>
</main>