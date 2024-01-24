<div class="container">
    <h1><?= $data["h1"] ?></h1>

    <section class="carousel slide" id="diapo" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/1500x300?v1" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1500x300?v2" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1500x300?v3" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1500x300?v4" alt="" class="d-block w-100">
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#diapo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#diapo" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </section>
</div>
