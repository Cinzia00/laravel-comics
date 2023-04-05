<div class="main-content">
    <div class="container">
        <a class="button button-current-serie">CURRENT SERIE</a>
        <ul class="card">
            <card v-for="(element, i) in list" :key="i" :title="element.series.toUpperCase()"
                :thumb="element.thumb" />
        </ul>
        <div class="button-load">
            <a class="button button-load-more">LOAD MORE</a>
        </div>
    </div>
    <ul class="bottom-main">
        <li>
            <div class="icon-box">
                <img src="{{ Vite::asset ('resources/img/buy-comics-digital-comics.png') }}" alt="">
            </div>
            <div>
                <a href="">DIGITAL COMICS</a>
            </div>
        </li>
        <li>
            <div class="icon-box">
                <img src="{{ Vite::asset ('resources/img/buy-comics-merchandise.png') }}" alt="">
            </div>
            <div>
                <a href="">DC MERCHANDISE</a>
            </div>
        </li>
        <li>
            <div class="icon-box">
                <img src="{{ Vite::asset ('resources/img/buy-comics-subscriptions.png') }}" alt="">
            </div>
            <div>
                <a href="">SUBSCRIPTION</a>
            </div>
        </li>
        <li>
            <div class="icon-box">
                <img src="{{ Vite::asset ('resources/img/buy-comics-shop-locator.png') }}" alt="">
            </div>
            <div>
                <a href="">COMIC SHOP LOCATOR</a>
            </div>
        </li>
        <li>
            <div class="icon-box">
                <img src="{{ Vite::asset ('resources/img/buy-dc-power-visa.svg') }}" alt="">
            </div>
            <div>
                <a href="">DC POWER VISA</a>
            </div>
        </li>
    </ul>
</div>
