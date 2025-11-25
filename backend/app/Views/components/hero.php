<div class="flex-1 text-left">
    <?php if (!empty($heading)): ?>
        <h1 class="h1"><?= esc($heading) ?></h1>
    <?php endif; ?>

    <?php if (!empty($subHeading)): ?>
        <div class="flex-1 text-center">
        <h2 class="h2"><?= esc($subHeading) ?></h2>
        <a href="#" class="button">Order Now</a>
    </div>
        <div class="h2-line"></div>
    <?php endif; ?>
</div>

    <style>
.h1 {
    font-size: 7rem;
    font-weight: bold;
    color: black;
    margin-bottom: 0.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    text-align: center;
    position: relative;
    padding-top: 80px;
}

.h1::before {
    content: "";
    position: absolute;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    width: 19rem;
    height: 4px;
    background: #ffd25fff;
    border-radius: 5px;
}
.h2 {
    font-size: 2.5rem;
    color: #333;
    text-align: center;
    margin-bottom: 4rem;
    font-weight: 500;
}
.button {
    margin: 90px 30px;
    padding: 12px 40px;
    font-size: 1.8rem;
    color: #000;
    background-color: #ffd25fff;
    text-decoration: none;
    border-radius: 30px;
    text-align: center;
    transition: all 0.3s ease;
}

.button:hover {
    background-color: #ffb800;
}
.h2-line {
    width: 28rem;
    height: 4px;
    background-color: #ffd25fff;
    border-radius: 5px;
    margin: 40px auto 0;
    margin-bottom: 50px;
}

    </style>
</section>