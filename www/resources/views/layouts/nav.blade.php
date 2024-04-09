<nav class="nav">
    <div class="nav__top">
        <div class="logo">
            <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS) }}" class="logo__link">
                <img class="logo__img" src="{{asset('storage')}}/img/logo.png" alt="Logo Daily Grow">
            </a>
        </div>
        <h2 class="nav__subtitle">
            Название аккаунта
        </h2>
    </div>
    <div class="nav__down">
        <button class="accordion flex">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.71 15.58L17.19 11.07C17.2846 10.6094 17.3315 10.1402 17.33 9.67001C17.3296 8.38066 17.0042 7.1122 16.3839 5.98189C15.7636 4.85158 14.8683 3.89588 13.7809 3.20315C12.6934 2.51041 11.4489 2.10299 10.1623 2.01855C8.87572 1.9341 7.58862 2.17535 6.41995 2.72001C6.27189 2.78764 6.14258 2.8904 6.04324 3.01936C5.94391 3.14832 5.87756 3.29958 5.84995 3.46001C5.82246 3.61839 5.83355 3.78107 5.88229 3.93426C5.93103 4.08745 6.01599 4.22663 6.12995 4.34001L10.48 8.68001L8.67995 10.48L4.33995 6.13001C4.22562 6.01781 4.08601 5.93472 3.93287 5.88773C3.77972 5.84075 3.61754 5.83124 3.45995 5.86001C3.30053 5.8866 3.14994 5.95144 3.02106 6.04897C2.89218 6.1465 2.78886 6.27381 2.71995 6.42001C2.17348 7.59251 1.93243 8.88419 2.01924 10.1749C2.10606 11.4656 2.5179 12.7133 3.21647 13.8021C3.91503 14.8908 4.87762 15.7852 6.0147 16.4021C7.15177 17.0189 8.42638 17.3381 9.71995 17.33C10.1902 17.3315 10.6593 17.2846 11.12 17.19L15.63 21.71C15.7229 21.8037 15.8335 21.8781 15.9554 21.9289C16.0772 21.9797 16.2079 22.0058 16.34 22.0058C16.472 22.0058 16.6027 21.9797 16.7245 21.9289C16.8464 21.8781 16.957 21.8037 17.05 21.71C17.1437 21.617 17.2181 21.5064 17.2688 21.3846C17.3196 21.2627 17.3458 21.132 17.3458 21C17.3458 20.868 17.3196 20.7373 17.2688 20.6154C17.2181 20.4936 17.1437 20.383 17.05 20.29L12.15 15.39C12.0275 15.2684 11.8757 15.1805 11.7092 15.1349C11.5427 15.0894 11.3673 15.0877 11.2 15.13C10.7171 15.2593 10.2198 15.3265 9.71995 15.33C8.972 15.3366 8.23014 15.1951 7.53709 14.9138C6.84405 14.6324 6.21353 14.2167 5.68184 13.6906C5.15016 13.1645 4.72783 12.5384 4.43917 11.8484C4.15052 11.1583 4.00124 10.418 3.99995 9.67001C3.99866 9.33502 4.02542 9.00052 4.07995 8.67001L7.99995 12.6C8.09292 12.6937 8.20352 12.7681 8.32538 12.8189C8.44724 12.8697 8.57794 12.8958 8.70995 12.8958C8.84197 12.8958 8.97267 12.8697 9.09453 12.8189C9.21639 12.7681 9.32699 12.6937 9.41995 12.6L12.6 9.39001C12.7802 9.20354 12.8809 8.95434 12.8809 8.695C12.8809 8.43567 12.7802 8.18647 12.6 8.00001L8.70995 4.08001C9.04054 4.02602 9.37499 3.99926 9.70995 4.00001C11.212 4.00265 12.6516 4.6012 13.7128 5.66424C14.774 6.72729 15.37 8.16796 15.37 9.67001C15.3665 10.1698 15.2993 10.6672 15.17 11.15C15.1276 11.3173 15.1293 11.4928 15.1749 11.6592C15.2204 11.8257 15.3083 11.9776 15.43 12.1L20.33 17C20.5183 17.1883 20.7737 17.2941 21.04 17.2941C21.3063 17.2941 21.5616 17.1883 21.75 17C21.9383 16.8117 22.044 16.5563 22.044 16.29C22.044 16.0237 21.9383 15.7683 21.75 15.58H21.71Z" fill="#DCE4EA"/>
            </svg>
            <span class="accordion__text">
                    {{ $title }}
                </span>
            <svg class="accordion__arrow" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.41 0L6 4.32659L10.59 0L12 1.33198L6 7L0 1.33198L1.41 0Z" fill="#6C757D"/>
            </svg>
        </button>
        <ul class="accordion__items nav__list list-reset flex">
            <li class="nav__item">
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS) }}" class="nav__link">
                    Аналитика
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ route(\App\Http\Controllers\ClientController::ROUTE_CLIENTS) }}" class="nav__link">
                    Клиенты
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_MAILING) }}" class="nav__link">
                    Рассылка
                </a>
            </li>
        </ul>
    </div>
</nav>
