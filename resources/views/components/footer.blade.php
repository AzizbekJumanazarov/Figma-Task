<footer>
    <div class="container">
        <x-footer-side />
        <section class="footer-section">
            <div class="menus-section">
                <p class="menu-title">Меню</p>
                <div class="menu-items">
                    <p>Афиша</p>
                    <p>Сеансы</p>
                    <p>Пушкинская карта</p>
                    <p>Кинотеатр</p>
                    <p>Контакты</p>
                </div>
            </div>
            <div class="paying-section">
                <div class="paying-items">
                    <p>Способы оплаты:</p>
                    <div class="paying-items-single">
                        <img src="{{ asset('images/icons/mastercard.svg') }}" alt="Mastercard">
                        <img src="{{ asset('images/icons/visa.svg') }}" alt="Visa">
                    </div>
                </div>
                <div class="paying-text">
                    <p>Все сеансы начинаются с рекламно-информационного блока.</p>
                    <p>Точную продолжительность сеансов можно уточнить в кинотеатре.</p>
                </div>
            </div>
        </section>
        <div class="footer-helper">
            <div class="social-section">
                <a href="#">
                    <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icons/youtube.svg') }}" alt="YouTube">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icons/vk.svg') }}" alt="VK">
                </a>
            </div>
            <p>© {{ date('Y') }} Все права защищены</p>
        </div>
    </div>
</footer>
