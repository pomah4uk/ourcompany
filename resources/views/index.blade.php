<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>OurCompany - Разработка сайтов</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Анимации и переходы */
        .transition-all {
            transition: all 0.3s ease;
        }

        .scale-on-hover:hover {
            transform: scale(1.05);
        }
        
        /* Навигация */
        .nav-hidden {
            transform: translateY(-100%);
            opacity: 0;
        }

        header {
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 1;
            transform: translateY(0);
        }

        .header-hidden {
            transform: translateY(-100%);
            opacity: 0;
        }

        /* Карточки и иконки */
        .card {
            @apply border rounded-lg overflow-hidden shadow-lg transition-all;
        }

        .icon-wrapper {
            @apply w-20 h-20 flex items-center justify-center transition-all scale-on-hover;
        }

        /* Формы */
        .form-input {
            @apply border rounded p-2 w-full focus:ring-2 focus:ring-yellow-400 focus:outline-none;
        }

        .btn {
            @apply px-4 py-2 rounded transition-all;
        }

        .btn-primary {
            @apply bg-yellow-500 text-white hover:bg-yellow-600;
        }
    </style>
    <meta name="description" content="Профессиональная разработка сайтов любой сложности: от лендингов до CRM-систем. Помощь с существующими сайтами, перенос на другой хостинг, интеграция CRM.">
    <meta name="keywords" content="разработка сайтов, лендинги, интернет-магазины, админ-панели, CRM-системы, автоматизация бизнеса">
    <meta name="author" content="OurCompany">
</head>
<body class="bg-gray-300 text-gray-800">
    <!-- Шапка -->
    <header class="p-4 shadow-lg fixed w-full z-10" style="background: rgba(0,0,0, .3)">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">OurCompany</h1>
            <nav>
                <button id="nav-toggle" class="md:hidden text-white hover:text-yellow-200">
                    <span class="sr-only">Открыть меню</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="#about" class="text-white hover:text-yellow-200 transition-colors">О нас</a></li>
                    <li><a href="#services" class="text-white hover:text-yellow-200 transition-colors">Услуги</a></li>
                    <li><a href="#contact" class="text-white hover:text-yellow-200 transition-colors">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
        
        <!-- О нас -->
        <section id="about" class="min-h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('/image/welcome.jpg')">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="container mx-auto px-6 relative z-10 text-white">
                <h2 class="text-4xl font-bold mb-6">О нас</h2>
                <p class="text-xl mb-8 max-w-2xl">Мы специализируемся на разработке современных веб-решений с 5-летним опытом в индустрии. От простых лендингов до сложных CRM-систем - мы создаем эффективные цифровые решения для вашего бизнеса.</p>
                <a href="#contact" class="p-5 rounded bg-black-100 hover:bg-black-900" style="background: rgba(0,0,0, .7)">Отправить заявку</a>
            </div>
        </section>

        <!-- Услуги -->
        <section id="services" class="py-16 bg-white">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-3xl font-bold text-center mb-4">Наши услуги</h2>
                <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Предоставляем полный спектр услуг по разработке и поддержке веб-проектов любой сложности</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Разработка -->
                    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                    </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Разработка сайтов</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Сайты-визитки от 15 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Лендинги от 15 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Интернет-магазины от 50 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Корпоративные сайты от 30 000 ₽</span>
                            </li>
                    </ul>
            </div>

                    <!-- Поддержка -->
                    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100">
                        <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
            </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Поддержка и доработка</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Доработка сайта от 5 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Перенос на другой хостинг от 3 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Сопровождение от 10 000 ₽/мес</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">WordPress, Joomla поддержка</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Дополнительные услуги -->
                    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100">
                        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Интеграции и разработка</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Платёжные системы от 5 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Интеграция CRM от 10 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">Разработка скриптов от 1 000 ₽</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg></span>
                                <span class="text-gray-600">API интеграции от 15 000 ₽</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-6">Все цены указаны ориентировочно. Финальная стоимость зависит от сложности проекта</p>
                    <a href="#contact" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                        Обсудить проект
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Виды проектов описания и ценники -->
        <section id="prices" class="p-6 bg-white rounded-lg shadow-md mt-4">
            <h2 class="text-3xl font-bold text-center mb-8">Прайс-лист на услуги</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
                <!-- Карточка услуги -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Сайт-визитка</h3>
                        <span class="text-lg font-bold text-green-600">от 15 000 ₽</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Идеальное решение для представления вашей компании в интернете</p>
                    <div class="border-t border-gray-100 pt-4">
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                До 5 страниц
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Адаптивный дизайн
                            </li>
                        </ul>
                    </div>
    </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Интернет-магазин</h3>
                        <span class="text-lg font-bold text-green-600">от 50 000 ₽</span>
                </div>
                    <p class="text-gray-600 text-sm mb-4">Полноценная платформа для онлайн-торговли</p>
                    <div class="border-t border-gray-100 pt-4">
                    <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Каталог товаров
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Корзина и оплата
                            </li>
                    </ul>
                </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Сайт под ключ</h3>
                        <span class="text-lg font-bold text-green-600">от 30 000 ₽</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Индивидуальная разработка любой сложности</p>
                    <div class="border-t border-gray-100 pt-4">
                    <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Уникальный дизайн
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Любой функционал
                            </li>
                    </ul>
                </div>
            </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Лендинг</h3>
                        <span class="text-lg font-bold text-green-600">от 15 000 ₽</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Одностраничный сайт для продвижения товара или услуги</p>
                    <div class="border-t border-gray-100 pt-4">
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Высокая конверсия
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Формы захвата
                            </li>
                        </ul>
            </div>
        </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">WordPress сайт</h3>
                        <span class="text-lg font-bold text-green-600">от 15 000 ₽</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Создание сайта на популярной CMS</p>
                    <div class="border-t border-gray-100 pt-4">
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Удобная админка
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                SEO-оптимизация
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Доп. услуги</h3>
                        <span class="text-lg font-bold text-green-600">от 1 000 ₽</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Дополнительные работы по сайту</p>
                    <div class="border-t border-gray-100 pt-4">
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Подключение домена (от 3 000 ₽)
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Сопровождение (от 10 000 ₽)
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Скрипты (от 1 000 ₽)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Примитивный конструктор сайтов с примерными ценами-->
        
        <section id="constructor" class="p-6 bg-white rounded-lg shadow-md mt-4">
            <h2 class="text-2xl font-bold text-center mb-5">Конструктор сайтов</h2>
            <p>Создайте свой сайт с помощью нашего конструктора.</p>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 p-2">
                    <h3 class="text-xl font-semibold mb-2">Базовый пакет</h3>
                    <p>Цена: 5 000 рублей</p>
                    <p>Описание: Создание простого сайта.</p>
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <h3 class="text-xl font-semibold mb-2">Продвинутый пакет</h3>
                    <p>Цена: 10 000 рублей</p>
                    <p>Описание: Создание сайта с расширенными функциями.</p>
                </div>
            </div>
        </section>

        <!-- Шаги разработки -->
        
        <section id="Step" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4">Этапы разработки</h2>
                <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Прозрачный процесс создания вашего проекта от начала до запуска</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <!-- Шаг 1 -->
                    <div class="relative bg-blue-50 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all border border-blue-100">
                        <div class="absolute -top-4 left-6 w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold">
                            1
                        </div>
                        <div class="w-16 h-16 mb-6 text-blue-500">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-blue-900">Анализ проекта</h3>
                        <p class="text-blue-700">Детальный анализ требований, целей и задач вашего проекта.</p>
                    </div>

                    <!-- Шаг 2 -->
                    <div class="relative bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all border border-gray-100">
                        <div class="absolute -top-4 left-6 w-8 h-8 bg-purple-500 text-white rounded-full flex items-center justify-center font-bold">
                            2
                        </div>
                        <div class="w-16 h-16 mb-6 text-purple-500">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Дизайн</h3>
                        <p class="text-gray-600">Разработка уникального дизайна и прототипа.</p>
                    </div>

                    <!-- Шаг 3 -->
                    <div class="relative bg-green-50 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all border border-green-100">
                        <div class="absolute -top-4 left-6 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">
                            3
                    </div>
                        <div class="w-16 h-16 mb-6 text-green-500">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-green-900">Разработка</h3>
                        <p class="text-green-700">Написание чистого и оптимизированного кода.</p>
                    </div>

                    <!-- Шаг 4 -->
                    <div class="relative bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all border border-gray-100">
                        <div class="absolute -top-4 left-6 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center font-bold">
                            4
                        </div>
                        <div class="w-16 h-16 mb-6 text-red-500">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Запуск</h3>
                        <p class="text-gray-600">Развертывание проекта на хостинге, настройка сервера и финальное тестирование.</p>
                    </div>

                    <!-- Шаг 5 -->
                    <div class="relative bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all border border-gray-100">
                        <div class="absolute -top-4 left-6 w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center font-bold">
                            5
                        </div>
                        <div class="w-16 h-16 mb-6 text-yellow-500">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Поддержка</h3>
                        <p class="text-gray-600">Техническая поддержка, обновления и оптимизация работы вашего проекта.</p>
                    </div>
                </div>

                <!-- Дополнительная информация -->
                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-6">Каждый этап разработки тщательно документируется и согласовывается с клиентом</p>
                    <a href="#contact" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                        Начать проект
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Отзывы -->

        <section id="reviews" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4">Отзывы клиентов</h2>
                <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Что говорят о нас наши клиенты</p>

                    <div class="relative">
                    <!-- Кнопки навигации -->
                    <button id="prevButton" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 lg:-translate-x-8 bg-white rounded-full p-2 shadow-lg hover:shadow-xl transition-all z-10 hidden md:block">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        </button>
                    
                    <button id="nextButton" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 lg:translate-x-8 bg-white rounded-full p-2 shadow-lg hover:shadow-xl transition-all z-10 hidden md:block">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                    </button>

                    <!-- Контейнер слайдера -->
                    <div class="overflow-hidden">
                        <div id="reviewsSlider" class="flex transition-transform duration-300 ease-in-out">
                            <!-- Отзыв 1 -->
                            <div class="min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                                <div class="bg-white rounded-xl shadow-lg p-6 h-full border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="flex text-yellow-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-4">"Компания создала для нас отличный сайт, который помог нам увеличить продажи. Особенно порадовала оперативность в работе и внимание к деталям."</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                                <span class="text-xl font-bold text-gray-600">А</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="font-semibold text-gray-800">Александр Петров</p>
                                            <p class="text-gray-500 text-sm">Владелец интернет-магазина</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Отзыв 2 -->
                            <div class="min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                                <div class="bg-white rounded-xl shadow-lg p-6 h-full border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="flex text-yellow-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <!-- Повторить для остальных звезд -->
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-4">"Благодаря их услугам, наш бизнес стал более успешным в интернете. Профессиональный подход и качественное исполнение."</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                                <span class="text-xl font-bold text-gray-600">М</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="font-semibold text-gray-800">Мария Иванова</p>
                                            <p class="text-gray-500 text-sm">Директор компании</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Добавьте больше отзывов по аналогии -->
                        </div>
                    </div>

                    <!-- Индикаторы -->
                    <div class="flex justify-center mt-8 space-x-2">
                        <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200 slider-dot active"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200 slider-dot"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200 slider-dot"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="technologies" class="p-6 bg-white rounded-lg shadow-md mt-4">
            <h2 class="text-2xl font-bold text-center mb-5">Технологии</h2>
            <div class="flex justify-center space-x-4">
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- Vue.js -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48">
                        <polygon fill="#81c784" points="23.987,17 18.734,8 2.974,8 23.987,44 45,8 29.24,8"></polygon><polygon fill="#455a64" points="29.24,8 23.987,17 18.734,8 11.146,8 23.987,30 36.828,8"></polygon>
                    </svg>
                </div>
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- Laravel -->
                    <svg width="80" height="80" viewBox="-4 0 264 264" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
    <g>
        <path d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z" fill="#FF2D20">

</path>
    </g>
</svg>    
                </div>
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- JavaScript -->
                    <svg width="80px" height="80px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="28" height="28" fill="#FFCA28"/>
                        <path d="M19 25.2879L21.0615 23.9237C21.2231 24.4313 22.2462 25.6368 23.5385 25.6368C24.8308 25.6368 25.4308 24.931 25.4308 24.463C25.4308 23.1878 24.1112 22.7382 23.4774 22.5223C23.374 22.4871 23.289 22.4581 23.2308 22.4328C23.2009 22.4198 23.1558 22.4025 23.0979 22.3804C22.393 22.1111 19.7923 21.1175 19.7923 18.2373C19.7923 15.065 22.8538 14.7002 23.5462 14.7002C23.9991 14.7002 26.1769 14.7557 27.2615 16.7939L25.2615 18.1898C24.8231 17.3015 24.0946 17.0081 23.6462 17.0081C22.5385 17.0081 22.3077 17.8201 22.3077 18.1898C22.3077 19.227 23.5112 19.6919 24.5273 20.0844C24.7932 20.1871 25.0462 20.2848 25.2615 20.3866C26.3692 20.91 28 21.7666 28 24.463C28 25.8136 26.8672 28.0002 24.0154 28.0002C20.1846 28.0002 19.1692 25.7003 19 25.2879Z" fill="#3E3E3E"/>
                        <path d="M9 25.5587L11.1487 24.1953C11.317 24.7026 11.9713 25.638 12.9205 25.638C13.8698 25.638 14.3557 24.663 14.3557 24.1953V15.0002H16.9982V24.1953C17.041 25.4636 16.3376 28.0002 13.2332 28.0002C10.379 28.0002 9.19242 26.3039 9 25.5587Z" fill="#3E3E3E"/>
                    </svg>
                </div>
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- Python -->
                    <svg width="80px" height="80px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0164 2C10.8193 2 9.03825 3.72453 9.03825 5.85185V8.51852H15.9235V9.25926H5.97814C3.78107 9.25926 2 10.9838 2 13.1111L2 18.8889C2 21.0162 3.78107 22.7407 5.97814 22.7407H8.27322V19.4815C8.27322 17.3542 10.0543 15.6296 12.2514 15.6296H19.5956C21.4547 15.6296 22.9617 14.1704 22.9617 12.3704V5.85185C22.9617 3.72453 21.1807 2 18.9836 2H13.0164ZM12.0984 6.74074C12.8589 6.74074 13.4754 6.14378 13.4754 5.40741C13.4754 4.67103 12.8589 4.07407 12.0984 4.07407C11.3378 4.07407 10.7213 4.67103 10.7213 5.40741C10.7213 6.14378 11.3378 6.74074 12.0984 6.74074Z" fill="url(#paint0_linear_87_8204)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9834 30C21.1805 30 22.9616 28.2755 22.9616 26.1482V23.4815L16.0763 23.4815L16.0763 22.7408L26.0217 22.7408C28.2188 22.7408 29.9998 21.0162 29.9998 18.8889V13.1111C29.9998 10.9838 28.2188 9.25928 26.0217 9.25928L23.7266 9.25928V12.5185C23.7266 14.6459 21.9455 16.3704 19.7485 16.3704L12.4042 16.3704C10.5451 16.3704 9.03809 17.8296 9.03809 19.6296L9.03809 26.1482C9.03809 28.2755 10.8192 30 13.0162 30H18.9834ZM19.9015 25.2593C19.1409 25.2593 18.5244 25.8562 18.5244 26.5926C18.5244 27.329 19.1409 27.9259 19.9015 27.9259C20.662 27.9259 21.2785 27.329 21.2785 26.5926C21.2785 25.8562 20.662 25.2593 19.9015 25.2593Z" fill="url(#paint1_linear_87_8204)"/>
                        <defs>
                            <linearGradient id="paint0_linear_87_8204" x1="12.4809" y1="2" x2="12.4809" y2="22.7407" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#327EBD"/>
                                <stop offset="1" stop-color="#1565A7"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_87_8204" x1="19.519" y1="9.25928" x2="19.519" y2="30" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDA4B"/>
                                <stop offset="1" stop-color="#F9C600"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- MySQL -->
                    <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#00758F" fill-rule="evenodd" d="M5.46192862,4.04007684 C5.18892668,4.03501656 4.99575061,4.06967946 4.79169495,4.11446291 L4.79169495,4.15152944 L4.82901449,4.15152944 C4.95944313,4.41909158 5.18943271,4.591394 5.35034952,4.82188962 C5.47407329,5.08262038 5.59817658,5.34297163 5.72227987,5.60332288 C5.73493056,5.5909252 5.74745474,5.57865403 5.75959941,5.56625635 C5.99047454,5.40394797 6.0957283,5.14410275 6.09471625,4.74737704 C6.00211318,4.64996671 5.98832392,4.52826705 5.90837155,4.4122602 C5.80235875,4.25754224 5.59615247,4.17012595 5.46192862,4.04007684 L5.46192862,4.04007684 Z M23.478665,23.1369293 C23.6543831,23.2658398 23.772161,23.4657208 24,23.5466852 L24,23.5093657 C23.8800714,23.3573044 23.8495833,23.1474294 23.7395222,22.9880306 C23.5786054,22.8271138 23.4164236,22.6655645 23.2555068,22.5040152 C22.7821179,21.8759083 22.1818425,21.3245911 21.5432356,20.8663831 C21.0345512,20.5006515 19.8944709,20.0072745 19.6819392,19.4148426 C19.6697946,19.4021919 19.6571439,19.3896677 19.6444932,19.3770171 C20.0054174,19.3365348 20.4283301,19.2059797 20.7614228,19.1165393 C21.3210894,18.9665021 21.8214243,19.0054662 22.3990549,18.8560615 C22.6600387,18.781296 22.9203899,18.7066569 23.1808677,18.6329033 L23.1808677,18.4834987 C22.8887632,18.1836773 22.6805328,17.7869515 22.3622414,17.5155942 C21.5283078,16.8061434 20.6188495,16.0966926 19.6818127,15.5056522 C19.1626283,15.1774933 18.5200996,14.9645821 17.969415,14.6865199 C17.7842089,14.5931578 17.4590861,14.5444526 17.3365009,14.3887226 C17.0476856,14.0198284 16.8899314,13.5523853 16.6667732,13.1228943 C16.1997097,12.2230506 15.740363,11.2403448 15.3263059,10.293567 C15.044322,9.6481287 14.8597484,9.01154587 14.5076796,8.43227067 C12.8174206,5.65329311 10.9976185,3.97581132 8.17942382,2.3270466 C7.57927498,1.97649592 6.85742648,1.83809735 6.09471625,1.65719245 C5.68546635,1.6325236 5.27545742,1.60734872 4.86620752,1.58267987 C4.61635635,1.47831166 4.35651113,1.17267094 4.12184079,1.02427832 C3.18796669,0.434503045 0.792811133,-0.848656668 0.10157731,0.838313141 C-0.335124586,1.90286889 0.753847001,2.94174374 1.14361483,3.48142227 C1.4172493,3.85980447 1.76704094,4.2842352 1.96287366,4.70967798 C2.09127818,4.98938478 2.11316388,5.27010364 2.22385744,5.56600333 C2.49432924,6.29518923 2.7293791,7.08838764 3.07929725,7.76241652 C3.25653344,8.10322617 3.45173363,8.46263233 3.67539786,8.76738751 C3.81265788,8.95449125 4.04720171,9.03684725 4.08401522,9.32578906 C3.85465817,9.64749617 3.84150145,10.1466925 3.7125909,10.5541713 C3.13065906,12.3887747 3.35014857,14.6686824 4.19660638,16.0266077 C4.45594557,16.443195 5.06773305,17.3374725 5.90837155,16.9942592 C6.64375629,16.6946908 6.47980332,15.76613 6.69018433,14.9469976 C6.73749792,14.760906 6.70865434,14.624405 6.80176344,14.5003017 L6.80176344,14.5373682 C7.02542767,14.9840642 7.2488389,15.4307601 7.47199711,15.8773296 C7.96815726,16.6759678 8.84826592,17.5111665 9.59415073,18.0739958 C9.98037636,18.3659737 10.2848785,18.8709894 10.7852134,19.0419002 L10.7852134,19.0040746 L10.7478939,19.0040746 C10.6504835,18.8536579 10.4989282,18.790531 10.3759635,18.6694638 C10.0844916,18.3836847 9.76050733,18.0287063 9.51938514,17.7014329 C8.84080201,16.780589 8.24153872,15.7725818 7.69553484,14.7235864 C7.43455106,14.2224925 7.20785066,13.6697838 6.98785512,13.1600874 C6.90322199,12.9633691 6.90423404,12.6662043 6.72737736,12.5643663 C6.48650818,12.9378147 6.13190928,13.2401663 5.94556458,13.6811694 C5.64776729,14.386319 5.60943569,15.2461865 5.49899515,16.1379338 C5.43371758,16.1614641 5.46268766,16.1453977 5.42422956,16.1750003 C4.90555118,16.0502645 4.72350772,15.5164053 4.53096418,15.0584502 C4.04378602,13.9006589 3.95333357,12.0360734 4.38206553,10.7030699 C4.4930121,10.3583386 4.99499157,9.27202362 4.79131543,8.95347919 C4.69441112,8.63544079 4.37510765,8.45187925 4.19635337,8.20885945 C3.97420721,7.90853201 3.75332613,7.5134509 3.59974672,7.16644241 C3.20150293,6.26368901 3.01528474,5.25024206 2.59540827,4.33749461 C2.39451528,3.90142525 2.0550972,3.45966308 1.77627595,3.07166635 C1.46759906,2.64204884 1.12185564,2.32578153 0.882884062,1.80583808 C0.797744903,1.62126448 0.681991069,1.32587082 0.808244978,1.13598393 C0.848094658,1.00783242 0.905022773,0.954446496 1.03190922,0.912572704 C1.24810955,0.746089595 1.84889092,0.967982736 2.07394674,1.06147135 C2.67055338,1.30929841 3.16924367,1.54548684 3.67489184,1.88035066 C3.91740561,2.04126747 4.16295554,2.35272751 4.45607208,2.43887872 L4.79118892,2.43887872 C5.31568662,2.5591868 5.90280525,2.47645128 6.39200751,2.62509691 C7.25744137,2.8881048 8.0329288,3.29722819 8.73719284,3.74202653 C10.8826237,5.09653615 12.6370217,7.02526068 13.8370664,9.32578906 C14.030116,9.69620133 14.1138635,10.0496617 14.2836358,10.4427187 C14.6265961,11.2350315 15.0591233,12.0501156 15.4004389,12.825097 C15.7408691,13.5978013 16.0728232,14.3779695 16.5541821,15.0213837 C16.8071959,15.3594102 17.7850944,15.5408211 18.2297663,15.7288104 C18.5412263,15.8602511 19.0514287,15.9976376 19.3460633,16.1750003 C19.9100312,16.5151775 20.4556556,16.9197466 20.9842015,17.292183 C21.2483479,17.4785277 22.0606489,17.886639 22.1006251,18.2223884 C20.7916579,18.1877255 19.7916207,18.3092986 18.9366869,18.6695903 C18.6936671,18.7716814 18.3064295,18.7747176 18.2664533,19.0787137 C18.4000446,19.2186304 18.4211712,19.4281259 18.527437,19.6000488 C18.7309867,19.9304848 19.0755915,20.3728795 19.3833829,20.6053993 C19.7195118,20.8590456 20.0657612,21.130403 20.4255469,21.3498925 C21.0663045,21.7407989 21.7818276,21.9638306 22.3984224,22.3551165 C22.7632683,22.5861182 23.1241926,22.8764515 23.478665,23.1369293 L23.478665,23.1369293 Z"/>
                    </svg>
                </div>
                <div class="icon-wrapper w-20 h-20 flex items-center justify-center">
                    <!-- PHP -->
                    <svg width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="-134.514" y1="-206.113" x2="-134.455" y2="-206.235" gradientTransform="matrix(247.636, 0, 0, -153.765, 33318.948, -31686.704)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#8a9fe0"/><stop offset="0.588" stop-color="#7182b8"/><stop offset="1" stop-color="#576490"/></linearGradient></defs><title>file_type_php2</title><path d="M14.486,20.381a17.345,17.345,0,0,1-.046,3.133.835.835,0,0,1-.439.709c-.831.617-3.616.765-3.963-.546-.128-.005-.026-.429-.148-.413a1.561,1.561,0,0,1-1.2-.735c.005-1.434.163-6.607-2.4-5.214a2.506,2.506,0,0,0-1.168,1.429,4.91,4.91,0,0,0-.24,1.643c-.02.714.158,1.495.184,2.352.01.383.071.48-.214.806-.459.525-1.26.082-1.693-.495a1.893,1.893,0,0,1-.291-.969,31.065,31.065,0,0,1,1-11.148c.367-1.23.495-1.408,1.663-1.684a12.948,12.948,0,0,1,4.05-.24c1.051-.342,3.545-2.194,4.621-.724a12.527,12.527,0,0,1,9.579,1.75,37.083,37.083,0,0,0,4.259.077c.2-.128.434-.265.638-.383a1.381,1.381,0,0,1,.495-.209c.23-.036.53-.046.6.24a3.292,3.292,0,0,1,.061.893.808.808,0,0,1-.643.76,4.02,4.02,0,0,1-1.148-.372c-1.3.036-2.1-.036-3.4,0,.209.224.2.372.352.668a6.381,6.381,0,0,1-.775,5.979c-.092,1.49.02,2.995.031,4.49.005.515.041,1.005-.444,1.347a3.263,3.263,0,0,1-2.867.24,2.523,2.523,0,0,1-.668-.556,2.807,2.807,0,0,1-.5.01,1.213,1.213,0,0,1-.689-.505,3.606,3.606,0,0,1-.235-.525c0-.7-.026-.974-.026-1.673a10.67,10.67,0,0,1-4.346-.122Z" style="fill:#ccc"/><path d="M12.095,24.839a3.748,3.748,0,0,1-1.217-.184,1.452,1.452,0,0,1-.972-.864.46.46,0,0,1-.1-.322l0-.045a1.8,1.8,0,0,1-1.25-.811l-.024-.039,0-.26c.009-1.182.032-4.323-1.034-4.962a1.1,1.1,0,0,0-1.128.1,2.356,2.356,0,0,0-1.1,1.349,4.783,4.783,0,0,0-.228,1.588,8.525,8.525,0,0,0,.085,1.2c.043.366.087.746.1,1.145,0,.059,0,.11.007.156a.849.849,0,0,1-.26.76.817.817,0,0,1-.665.288,1.849,1.849,0,0,1-1.276-.792,1.973,1.973,0,0,1-.322-1.053A31.068,31.068,0,0,1,3.719,10.887c.375-1.255.54-1.5,1.779-1.793a13.117,13.117,0,0,1,4.068-.247,8.378,8.378,0,0,0,.875-.4c1.232-.616,2.91-1.453,3.831-.334a12.633,12.633,0,0,1,9.567,1.768A36.054,36.054,0,0,0,28,9.953c.2-.123.412-.251.606-.363l.056-.032a1.366,1.366,0,0,1,.494-.2c.444-.069.7.053.777.361a3.477,3.477,0,0,1,.065.939.97.97,0,0,1-.791.909l-.026,0-.025-.007c-.085-.022-.171-.042-.26-.062A3.127,3.127,0,0,1,28,11.2c-.633.016-1.155.007-1.659,0-.433-.007-.878-.015-1.394-.007.032.063.055.124.08.186a2.467,2.467,0,0,0,.112.256,6.533,6.533,0,0,1-.761,6.126c-.056.966-.027,1.957,0,2.916.015.491.03,1,.033,1.5v.086a1.448,1.448,0,0,1-.513,1.393,3.4,3.4,0,0,1-3.02.257,1.8,1.8,0,0,1-.564-.437c-.035-.036-.07-.072-.106-.106-.049,0-.1.006-.145.011a.952.952,0,0,1-.33-.006,1.375,1.375,0,0,1-.783-.571,1.779,1.779,0,0,1-.171-.361c-.023-.061-.047-.123-.076-.188l-.014-.031v-.034c0-.347-.006-.594-.013-.832-.005-.2-.01-.4-.012-.659a10.815,10.815,0,0,1-4-.092,17.55,17.55,0,0,1-.065,2.931.984.984,0,0,1-.5.813A3.748,3.748,0,0,1,12.095,24.839Zm-1.969-1.318h.036l.03.114a1.106,1.106,0,0,0,.791.718,3.912,3.912,0,0,0,2.922-.259.687.687,0,0,0,.375-.6,17.157,17.157,0,0,0,.055-2.976l-.085-.024L14.6,19.8l.041.463a10.678,10.678,0,0,0,4.169.088l.181-.024v.182c0,.347.006.594.013.832s.012.473.013.807c.025.059.047.116.069.171a1.524,1.524,0,0,0,.139.3,1.057,1.057,0,0,0,.6.44.729.729,0,0,0,.216,0,1.888,1.888,0,0,1,.244-.013l.06,0,.044.041c.054.05.108.105.162.16a1.537,1.537,0,0,0,.46.366,3.1,3.1,0,0,0,2.712-.224c.388-.274.383-.65.377-1.127v-.087c0-.5-.018-1-.033-1.492-.029-.987-.059-2.008,0-3.009l0-.066.05-.044a6.184,6.184,0,0,0,.739-5.785,2.755,2.755,0,0,1-.126-.287.911.911,0,0,0-.2-.346l-.241-.259.353-.01c.654-.018,1.188-.009,1.706,0s1.045.018,1.691,0h.047l.04.025a2.716,2.716,0,0,0,.835.289c.082.019.163.037.242.057a.671.671,0,0,0,.471-.609,3.141,3.141,0,0,0-.058-.847c-.014-.061-.041-.176-.416-.117a1.065,1.065,0,0,0-.384.158l-.056.032c-.2.114-.429.253-.631.379l-.037.023h-.043a36.326,36.326,0,0,1-4.278-.077l-.042,0-.035-.024a12.347,12.347,0,0,0-9.461-1.725l-.1.018-.059-.08c-.747-1.02-2.334-.227-3.493.352a7.889,7.889,0,0,1-.95.43l-.032.01-.033,0a12.792,12.792,0,0,0-4,.236c-1.121.264-1.2.4-1.547,1.574a30.75,30.75,0,0,0-1,11.09,1.683,1.683,0,0,0,.258.884,1.551,1.551,0,0,0,1.033.666.5.5,0,0,0,.413-.179.552.552,0,0,0,.182-.532c0-.049-.006-.1-.007-.164-.011-.386-.055-.758-.1-1.118a8.754,8.754,0,0,1-.087-1.243,5.022,5.022,0,0,1,.251-1.7,2.67,2.67,0,0,1,1.24-1.509,1.4,1.4,0,0,1,1.444-.1c1.223.733,1.2,3.89,1.19,5.238v.167a1.4,1.4,0,0,0,1.028.622.2.2,0,0,1,.15.045.4.4,0,0,1,.1.3C10.123,23.471,10.124,23.5,10.126,23.521Zm-.216-.1h0Z" style="fill:#ccc"/><path d="M13.891,19.981a17.345,17.345,0,0,1-.046,3.133.835.835,0,0,1-.439.709c-.831.617-3.616.765-3.963-.546-.128-.005-.026-.429-.148-.413a1.561,1.561,0,0,1-1.2-.735c.005-1.434.163-6.607-2.4-5.214a2.506,2.506,0,0,0-1.168,1.429,4.91,4.91,0,0,0-.24,1.643c-.02.714.158,1.495.184,2.352.01.383.071.48-.214.806-.459.525-1.26.082-1.693-.495a1.893,1.893,0,0,1-.291-.969,31.065,31.065,0,0,1,1-11.148c.367-1.23.495-1.408,1.663-1.684a12.948,12.948,0,0,1,4.05-.24c1.051-.342,3.545-2.194,4.621-.724a12.527,12.527,0,0,1,9.579,1.75,37.083,37.083,0,0,0,4.259.077c.2-.128.434-.265.638-.383a1.381,1.381,0,0,1,.495-.209c.23-.036.53-.046.6.24a3.292,3.292,0,0,1,.061.893.808.808,0,0,1-.643.76,4.02,4.02,0,0,1-1.148-.372c-1.3.036-2.1-.036-3.4,0,.209.224.2.372.352.668a6.381,6.381,0,0,1-.775,5.979c-.092,1.49.02,2.995.031,4.49.005.515.041,1.005-.444,1.347a3.263,3.263,0,0,1-2.867.24,2.523,2.523,0,0,1-.668-.556,2.807,2.807,0,0,1-.5.01,1.213,1.213,0,0,1-.689-.505,3.606,3.606,0,0,1-.235-.525c0-.7-.026-.974-.026-1.673a10.67,10.67,0,0,1-4.346-.122Z" style="fill:#373435"/><path d="M11.5,24.439a3.748,3.748,0,0,1-1.217-.184,1.452,1.452,0,0,1-.972-.864.46.46,0,0,1-.1-.322l0-.045a1.8,1.8,0,0,1-1.25-.811l-.024-.039,0-.26c.009-1.182.032-4.323-1.034-4.962a1.1,1.1,0,0,0-1.128.1,2.356,2.356,0,0,0-1.1,1.349,4.783,4.783,0,0,0-.228,1.588,8.522,8.522,0,0,0,.085,1.2c.043.367.087.746.1,1.146,0,.059,0,.11.007.156a.849.849,0,0,1-.26.76.816.816,0,0,1-.665.288,1.849,1.849,0,0,1-1.276-.792,1.974,1.974,0,0,1-.322-1.053A31.068,31.068,0,0,1,3.124,10.487c.375-1.255.54-1.5,1.779-1.793a13.115,13.115,0,0,1,4.068-.247,8.378,8.378,0,0,0,.875-.4c1.232-.616,2.91-1.454,3.831-.334a12.634,12.634,0,0,1,9.567,1.769,36.037,36.037,0,0,0,4.156.074c.195-.121.413-.252.606-.363l.056-.032a1.366,1.366,0,0,1,.494-.2c.444-.069.7.053.777.361a3.476,3.476,0,0,1,.065.939.97.97,0,0,1-.791.909l-.026,0-.025-.007c-.085-.022-.171-.042-.26-.062a3.127,3.127,0,0,1-.889-.3c-.633.016-1.155.007-1.659,0-.433-.007-.878-.015-1.394-.007.032.063.055.124.08.186a2.467,2.467,0,0,0,.112.256,6.534,6.534,0,0,1-.761,6.126c-.056.966-.027,1.957,0,2.915.014.492.029,1,.033,1.5v.086a1.448,1.448,0,0,1-.512,1.393,3.4,3.4,0,0,1-3.02.257,1.8,1.8,0,0,1-.564-.437c-.035-.036-.07-.072-.106-.106-.049,0-.1.006-.145.011a.95.95,0,0,1-.33-.006,1.375,1.375,0,0,1-.783-.571,1.769,1.769,0,0,1-.171-.361c-.023-.061-.047-.123-.076-.188l-.014-.031v-.034c0-.347-.006-.594-.013-.832-.005-.2-.011-.4-.012-.659a10.817,10.817,0,0,1-4-.092A17.56,17.56,0,0,1,14,23.135a.984.984,0,0,1-.5.813A3.748,3.748,0,0,1,11.5,24.439ZM9.531,23.121h.036l.03.114a1.106,1.106,0,0,0,.791.718,3.911,3.911,0,0,0,2.922-.259.687.687,0,0,0,.375-.6,17.162,17.162,0,0,0,.055-2.976l-.085-.024L14,19.405l.041.463a10.679,10.679,0,0,0,4.169.088l.181-.024v.182c0,.347.006.594.013.832s.012.473.013.807c.025.059.047.116.069.172a1.514,1.514,0,0,0,.139.3,1.057,1.057,0,0,0,.6.44.722.722,0,0,0,.216,0,1.888,1.888,0,0,1,.244-.013l.06,0,.044.041c.054.05.108.1.162.16a1.539,1.539,0,0,0,.46.366,3.1,3.1,0,0,0,2.712-.224c.388-.274.383-.65.377-1.127v-.087c0-.5-.018-1-.033-1.493-.029-.987-.059-2.007,0-3.008l0-.066.05-.044a6.185,6.185,0,0,0,.739-5.785,2.755,2.755,0,0,1-.126-.287.911.911,0,0,0-.2-.346l-.241-.259.353-.01c.654-.018,1.188-.009,1.706,0s1.045.018,1.691,0h.047l.04.025a2.716,2.716,0,0,0,.835.289c.082.019.163.037.242.057a.671.671,0,0,0,.471-.609,3.144,3.144,0,0,0-.058-.847c-.014-.061-.041-.175-.416-.117a1.064,1.064,0,0,0-.384.158l-.057.032c-.2.115-.431.254-.631.379L27.5,9.87h-.043a36.353,36.353,0,0,1-4.278-.077l-.042,0L23.1,9.767a12.347,12.347,0,0,0-9.461-1.725l-.1.018-.059-.08c-.747-1.02-2.334-.227-3.493.352a7.889,7.889,0,0,1-.95.43l-.032.01-.033,0a12.788,12.788,0,0,0-4,.236c-1.121.264-1.2.4-1.547,1.574a30.75,30.75,0,0,0-1,11.09,1.683,1.683,0,0,0,.258.884,1.551,1.551,0,0,0,1.033.666.493.493,0,0,0,.413-.179.552.552,0,0,0,.182-.532c0-.049-.006-.1-.007-.164-.011-.386-.055-.758-.1-1.118a8.743,8.743,0,0,1-.087-1.243,5.022,5.022,0,0,1,.251-1.7,2.67,2.67,0,0,1,1.24-1.509,1.4,1.4,0,0,1,1.444-.1c1.223.733,1.2,3.89,1.19,5.238v.167A1.4,1.4,0,0,0,9.28,22.7a.2.2,0,0,1,.15.045.4.4,0,0,1,.1.3C9.528,23.071,9.529,23.1,9.531,23.121Zm-.216-.1h0Z" style="fill:#373435"/><path d="M18.572,19.946a4.782,4.782,0,0,0,.946-.189,11.582,11.582,0,0,1,.137,2.749,1.177,1.177,0,0,1-1.134-.663A8.774,8.774,0,0,1,18.572,19.946Z" style="fill:#6978ab"/><path d="M19.622,22.666a1.33,1.33,0,0,1-1.242-.749l-.015-.028,0-.032a8.978,8.978,0,0,1,.052-1.932l.016-.124.124-.014a4.7,4.7,0,0,0,.915-.182l.164-.053.04.168a10.177,10.177,0,0,1,.147,2.484l-.008.459-.154,0Zm-.944-.87a1,1,0,0,0,.821.545l0-.144a10.985,10.985,0,0,0-.1-2.238,5.036,5.036,0,0,1-.683.13A8.609,8.609,0,0,0,18.677,21.8Z" style="fill:#373435"/><path d="M4.052,22.683c-.225-1.474-.454-4.075.6-5.315a3.452,3.452,0,0,1,.27-.321c1.663-1.566,3.112-.219,3.505,1.515a27.314,27.314,0,0,1,.051,3.295,1.109,1.109,0,0,0,1.051.6c.153.316.112.551.286.76a2.5,2.5,0,0,0,2.7.694,8.441,8.441,0,0,0,.913-.454,10.14,10.14,0,0,0-.1-4.045c0-.184-.061-.306-.061-.49a.626.626,0,0,1,.311.138c-.2.734,2.556,1.239,5.771.352.036-.128-.026-.286.051-.332a.4.4,0,0,1,.337-.041c.015.235.02.464.036.7a4.654,4.654,0,0,0,.75.01.838.838,0,0,1-.6.214c.056,0-.031.107.02.117.148.036.429-.02.546.031-.219.128-.464.056-.612.2.036.78.056,1.617.087,2.4a2.591,2.591,0,0,0,3.311-.148,28.633,28.633,0,0,0-.1-4.7c-.117-.015-.235-.036-.352-.051,1.827-2.458,2.179-4.973.648-7.243-.015-.1-.082-.2-.1-.3,1.332-.051,2.7.087,4.036.036a6.478,6.478,0,0,0,1.112.311c.393-.138.464-1.229.077-1.107s-.6.367-1.015.52c-1.531,0-3.23-.061-4.76-.061a9.5,9.5,0,0,0-9-1.551,8.371,8.371,0,0,1,.26,6.427c-.087.286-1.408,1.122-.327.209,1.092-.928.408-7.375-.934-7.386a6.327,6.327,0,0,0-4.25,1.7c-.209-.224-.194-.133-.1-.449a9.863,9.863,0,0,0-3.4.3,1.428,1.428,0,0,0-1.3.949,33.949,33.949,0,0,0-1.2,11.094,4.574,4.574,0,0,0,.352,1.3c.6.658.924.469,1.123.122Z" style="fill:url(#a)"/><path d="M6.446,10.422a2.187,2.187,0,0,0-1.063-.149.144.144,0,0,0-.153.1.2.2,0,0,0-.02.154c.031.087.036.082.112.1a.648.648,0,0,0,.3-.026.883.883,0,0,1,.746-.036c.112-.005.123-.051.087-.139Z" style="fill:#373435"/><path d="M5.406,10.791a.566.566,0,0,1-.118-.012l-.013,0a.246.246,0,0,1-.217-.2.367.367,0,0,1,.031-.284.294.294,0,0,1,.283-.18,2.335,2.335,0,0,1,1.1.149h.082l.041.1a.237.237,0,0,1-.227.359H6.344l-.027-.008a.722.722,0,0,0-.62.022l-.018.011-.02.005A.989.989,0,0,1,5.406,10.791Zm-.044-.323a.5.5,0,0,0,.2-.02l.054-.027c-.07,0-.141,0-.213.011H5.377l-.006.012A.075.075,0,0,0,5.362,10.468Z" style="fill:#373435"/><path d="M5.622,11.687a.549.549,0,0,1,.507-.311c.02-.128,0-.2-.164-.2a1.535,1.535,0,0,0-.578.51,1.051,1.051,0,0,0-.077.6.538.538,0,0,0,.2.352.666.666,0,0,0,.752-.031c.358-.209.716-.806.087-1.031a.963.963,0,0,0-.732.153c-.01.005-.015-.015,0-.041Z" style="fill:#373435"/><path d="M5.816,12.906a.622.622,0,0,1-.408-.142.7.7,0,0,1-.256-.458,1.154,1.154,0,0,1,.1-.7,1.7,1.7,0,0,1,.635-.568l.035-.021H5.96a.338.338,0,0,1,.269.095.348.348,0,0,1,.058.289h0a.683.683,0,0,1,.564.524.975.975,0,0,1-.508.823A1.067,1.067,0,0,1,5.816,12.906ZM5.493,11.84a1.082,1.082,0,0,0-.024.432.38.38,0,0,0,.145.248c.193.161.506-.011.567-.047a.674.674,0,0,0,.352-.518c-.009-.1-.089-.172-.237-.225a.824.824,0,0,0-.593.138l-.013.007-.107.054-.088-.089Z" style="fill:#373435"/><path d="M5.9,12.381a.4.4,0,0,0,.021.107.211.211,0,0,0,.021.046.215.215,0,0,1-.2.02c-.221-.1-.205-.41-.092-.578a.671.671,0,0,1,.529-.292c.118.061.154.118.092.133a.337.337,0,0,0-.1.036.183.183,0,0,0-.1.113c.051.015.077,0,.123.02v.159a.24.24,0,0,0-.159-.02c-.1.031-.139.174-.139.261Z" style="fill:#fefefe"/><path d="M6.323,16.459A2.19,2.19,0,0,0,8,13.834a1.1,1.1,0,0,1-.511-.138c-.01-.066-.015-.133-.026-.2.414.2,1,.26.924-.373.056-.015.143-.02.2-.036-.02.444-.1.485-.373.674a3.01,3.01,0,0,1-.9,2.666.881.881,0,0,0,.036.414,1.233,1.233,0,0,0-1.026-.373Z" style="fill:#373435"/><path d="M7.632,17.391l-.4-.442a1.081,1.081,0,0,0-.906-.32l-.162,0v-.28l.113-.045a2.02,2.02,0,0,0,1.584-2.327,1.028,1.028,0,0,1-.458-.147l-.062-.039L7.33,13.72c-.005-.035-.01-.07-.014-.105s-.007-.062-.012-.094l-.046-.3.273.132a.734.734,0,0,0,.625.08c.064-.045.088-.143.071-.291l-.015-.136.132-.036a.994.994,0,0,1,.119-.022.721.721,0,0,0,.08-.014l.212-.058-.01.219c-.021.456-.121.571-.361.742a3.172,3.172,0,0,1-.925,2.669.941.941,0,0,0,.035.252Zm-.7-1.008a1.2,1.2,0,0,1,.21.09.431.431,0,0,1,.021-.1l.011-.032.023-.025q.128-.137.237-.275A2.643,2.643,0,0,1,6.932,16.383Z" style="fill:#373435"/><path d="M22.157,23.213c-.025-.377-.071-.708-.082-1.086-.025-.866-.683-1.055-.719-.189-.02.454,0,.882,0,1.31A2.244,2.244,0,0,0,22.157,23.213Z" style="fill:#8093d0"/><path d="M21.739,23.32c-.1,0-.194-.006-.289-.012L21.3,23.3v-.05c0-.142,0-.283,0-.425,0-.286-.009-.582,0-.887.019-.453.2-.614.361-.614h0c.213,0,.447.283.463.8.006.231.026.442.046.665.013.136.025.274.035.418l0,.043-.041.012A1.523,1.523,0,0,1,21.739,23.32ZM21.41,23.2l.048,0a1.993,1.993,0,0,0,.643-.029c-.009-.128-.021-.251-.032-.372-.021-.225-.04-.437-.047-.672-.013-.431-.2-.7-.357-.7h0c-.108,0-.239.134-.255.512-.014.3-.009.6,0,.881C21.408,22.948,21.41,23.073,21.41,23.2Z" style="fill:#373435"/><path d="M21.368,23.257a6.358,6.358,0,0,1-.081-1.317c.056-.8-.7-1.643-.751-.158a7.955,7.955,0,0,0,.051,1.3A5.155,5.155,0,0,0,21.368,23.257Z" style="fill:#8093d0"/><path d="M21.429,23.321l-.069-.011a5.145,5.145,0,0,1-.79-.175l-.032-.011,0-.033a7.975,7.975,0,0,1-.051-1.31c.016-.479.1-.763.263-.845a.221.221,0,0,1,.234.023,1.2,1.2,0,0,1,.361.985A5.475,5.475,0,0,0,21.4,23.1Zm-.794-.277a5,5,0,0,0,.671.15l-.01-.083a5.645,5.645,0,0,1-.063-1.174,1.1,1.1,0,0,0-.313-.889.119.119,0,0,0-.126-.018c-.055.028-.185.159-.206.754A7.9,7.9,0,0,0,20.635,23.044Z" style="fill:#373435"/><path d="M20.588,23.15l-.107-1.7c-.077-1.269-.587-1.121-.628-.076-.02.494.02.764-.026,1.259.24.163.49.484.761.51Z" style="fill:#8093d0"/><path d="M20.583,23.2a1.1,1.1,0,0,1-.555-.331,2.5,2.5,0,0,0-.23-.188l-.026-.018,0-.031a6.217,6.217,0,0,0,.021-.72c0-.162,0-.329,0-.536.021-.533.162-.879.359-.881h0c.2,0,.338.357.374.956l.107,1.7h0v0l-.054,0Zm-.7-.589c.072.052.144.116.215.178a1.28,1.28,0,0,0,.432.293l-.1-1.624c-.038-.629-.181-.856-.268-.856h0c-.09,0-.233.249-.253.779-.009.2-.006.371,0,.531A6.444,6.444,0,0,1,19.883,22.609Z" style="fill:#373435"/><path d="M11.865,24.028a7.005,7.005,0,0,0-.061-1.191c-.214-.92-.484-1.033-.8-.353v1.528a3.474,3.474,0,0,0,.862.01Z" style="fill:#8093d0"/><path d="M11.542,24.1c-.166,0-.332-.015-.495-.03l-.1-.009,0-1.6c.153-.329.3-.482.448-.466.182.019.326.282.453.829l.01.087a6.605,6.605,0,0,1,.053,1.118h-.052l.007.046A2.073,2.073,0,0,1,11.542,24.1Zm-.486-.136h0a3.437,3.437,0,0,0,.757.013,6.638,6.638,0,0,0-.054-1.053l-.009-.081c-.146-.627-.288-.734-.359-.741-.055,0-.168.039-.335.395Z" style="fill:#373435"/><path d="M10.3,23.776c.005-.586.01-.974.01-1.56.214-.862.433-.775.647.26.005.556.01.918.01,1.473a1.647,1.647,0,0,1-.673-.173Z" style="fill:#8093d0"/><path d="M11.017,24.009l-.09-.01a1.627,1.627,0,0,1-.663-.177l-.175-.1h.154l0-.3c0-.41.007-.749.007-1.211l0-.013c.108-.434.214-.628.345-.628h0c.1,0,.241.105.4.89l0,.346c0,.385.007.7.007,1.139Zm-.667-.262a1.517,1.517,0,0,0,.561.142c0-.406,0-.711-.007-1.078l0-.335c-.157-.753-.277-.794-.3-.794s-.109.012-.241.54c0,.459,0,.8-.007,1.206Z" style="fill:#373435"/><path d="M9.5,22.623c.031-.49.133-.985.163-1.475-.2-.97-.418-1.143-.647-.51-.01.628-.015,1.261-.025,1.889a.711.711,0,0,0,.51.1Z" style="fill:#8093d0"/><path d="M9.373,22.7a.8.8,0,0,1-.348-.1l-.084-.038v-.035q.008-.471.013-.944t.013-.945l0-.017c.1-.287.206-.416.326-.408s.259.121.424.926v.014c-.015.247-.049.5-.082.741s-.066.49-.081.732v.046l-.042.009A.679.679,0,0,1,9.373,22.7Zm-.324-.2.02.009a.61.61,0,0,0,.385.082c.016-.235.048-.474.08-.705s.065-.486.081-.727c-.157-.763-.289-.831-.326-.834-.02,0-.1.017-.215.33q-.008.466-.013.935T9.049,22.492Z" style="fill:#373435"/><path d="M19.021,22.468c.041-.521-.015-.955,0-1.465.015-.618.626-.439.652.128s.056.858.087,1.424a1.309,1.309,0,0,1-.733-.087Z" style="fill:#8093d0"/><path d="M19.463,22.618a.922.922,0,0,1-.451-.1h-.044v-.057a7.342,7.342,0,0,0,.006-.836c-.006-.2-.013-.407-.006-.626.008-.322.167-.438.313-.439h0c.2,0,.427.215.442.566.015.289.03.5.044.721s.028.423.043.7l0,.054-.155.006C19.592,22.615,19.527,22.618,19.463,22.618Zm-.387-.184a1.1,1.1,0,0,0,.579.072l.048,0c-.014-.253-.027-.451-.04-.648-.014-.217-.028-.433-.044-.723s-.183-.465-.336-.465h0c-.125,0-.2.127-.208.336s0,.421.006.62A7.778,7.778,0,0,1,19.076,22.434Z" style="fill:#373435"/><path d="M18.989,22.487c-.015-.382-.01-.841-.025-1.223.036-.525-.326-1.3-.468-.438a8.571,8.571,0,0,0-.081.963A4.066,4.066,0,0,0,18.989,22.487Z" style="fill:#b9c5ea"/><path d="M19.046,22.595l-.089-.064A2.556,2.556,0,0,1,18.5,22c-.048-.067-.092-.128-.128-.174l-.013-.016v-.02c.007-.1.012-.2.016-.28a5.486,5.486,0,0,1,.066-.688c.018-.112.074-.452.253-.43.2.024.343.558.321.88.008.186.01.4.013.607s.005.42.013.61Zm-.578-.822c.035.045.075.1.119.162a3.567,3.567,0,0,0,.345.433c0-.158-.007-.327-.009-.491,0-.206-.005-.42-.013-.61.025-.372-.14-.763-.227-.773-.019-.006-.088.054-.136.341a5.4,5.4,0,0,0-.065.676C18.478,21.591,18.474,21.676,18.468,21.772Z" style="fill:#373435"/><path d="M14.443,15.459c.26-1.24.515-2.48.775-3.725.041-.291.117-.551.423-.577h.372c.224,0,.352.133.372.4l-.076.551c.01.225.148.352.423.373.372.015.75.036,1.122.051.561.036.938.276.9.975-.117.617-.235,1.235-.352,1.847a.725.725,0,0,1-.474.648c-.168-.01-.357.01-.525,0-.291.015-.459-.092-.352-.475.107-.485.24-1.092.352-1.577.041-.577-.173-.607-.4-.648-.194-.026-.382,0-.576-.026-.286.041-.393.316-.474.623-.122.515-.25,1.031-.372,1.551-.056.281-.117.464-.326.551h-.622q-.352-.077-.2-.551Z" style="fill:#373435"/><path d="M17.509,16.11c-.037,0-.073,0-.109,0a.468.468,0,0,1-.415-.137.511.511,0,0,1-.039-.473l.061-.278c.093-.422.2-.893.288-1.286.031-.465-.094-.488-.3-.526-.186-.025-.365,0-.565-.024-.2.036-.291.235-.373.542-.054.227-.11.458-.166.689-.069.286-.138.572-.206.86s-.123.514-.389.625l-.02.008-.666,0a.4.4,0,0,1-.276-.185.616.616,0,0,1,0-.5l.033-.1q.2-.969.4-1.939.172-.83.345-1.661c.028-.2.087-.625.519-.661h.381c.164,0,.445.064.478.5v.011l-.077.552c.007.113.054.242.324.262l.561.025.557.025a.928.928,0,0,1,1,1.087l0,.014c-.117.618-.235,1.235-.352,1.848a.829.829,0,0,1-.543.728l-.02.007h-.022c-.079,0-.164,0-.253,0C17.614,16.108,17.561,16.11,17.509,16.11Zm-.108-.216h.006c.079,0,.164,0,.253,0s.168,0,.25,0a.625.625,0,0,0,.385-.557q.176-.92.351-1.844c.031-.562-.208-.818-.8-.855l-.556-.025-.563-.026c-.44-.033-.518-.311-.525-.474V12.1l.076-.549c-.023-.256-.154-.289-.265-.289h-.372c-.184.016-.27.143-.318.485-.117.562-.232,1.115-.347,1.668q-.214,1.033-.43,2.064l-.04.193-.012-.012a.261.261,0,0,0,.023.151.187.187,0,0,0,.126.081h.587c.143-.068.192-.2.244-.466.069-.292.138-.579.207-.865q.084-.346.166-.691c.061-.228.172-.648.563-.7l.014,0,.015,0c.182.024.372,0,.576.026l.014,0c.286.052.519.145.476.759l0,.017c-.091.394-.2.868-.289,1.292l-.063.284c-.04.143-.04.241,0,.289s.157.061.243.057Z" style="fill:#fefefe"/><path d="M9.624,16.894c.255-1.322.515-2.644.771-3.961a.426.426,0,0,1,.449-.449h2.348a1.231,1.231,0,0,1,1.107.623,1.587,1.587,0,0,1,.189.934,2.35,2.35,0,0,1-.694,1.465,2.186,2.186,0,0,1-1.148.5c-.4.01-.8.015-1.2.026-.23-.02-.459.041-.515.225-.071.25-.122.5-.194.745a.42.42,0,0,1-.265.23c-.23.005-.464.005-.694.01C9.532,17.246,9.583,17.1,9.624,16.894Zm1.638-2.266c.066-.347.148-.74.209-1.046a.452.452,0,0,1,.449-.3,1.825,1.825,0,0,1,.715.092.766.766,0,0,1,.383,1.082,1.437,1.437,0,0,1-.852.7,1.651,1.651,0,0,1-.51.051c-.439-.046-.475-.163-.4-.582Z" style="fill:#373435"/><path d="M9.766,17.348a.283.283,0,0,1-.232-.085c-.076-.091-.05-.214-.023-.344l.009-.045q.211-1.092.425-2.184.172-.882.343-1.762a.5.5,0,0,1,.138-.377.559.559,0,0,1,.423-.173h2.343a1.327,1.327,0,0,1,1.2.681,1.693,1.693,0,0,1,.2.99,2.458,2.458,0,0,1-.724,1.532l-.012.011a2.288,2.288,0,0,1-1.2.521c-.206.006-.407.009-.607.013l-.6.013h-.012c-.161-.014-.364.016-.4.15s-.065.244-.1.367-.062.25-.1.377a.509.509,0,0,1-.326.3l-.019.008h-.02l-.345.005-.349.005Zm-.067-.22a.226.226,0,0,0,.076.007l.352-.005.322,0c.108-.048.17-.1.187-.154.035-.123.065-.245.1-.368s.062-.25.1-.376c.065-.214.3-.329.621-.3l.594-.013.6-.013a2.083,2.083,0,0,0,1.08-.474,2.246,2.246,0,0,0,.659-1.392,1.487,1.487,0,0,0-.178-.879,1.144,1.144,0,0,0-1.018-.564H10.844a.343.343,0,0,0-.263.107.285.285,0,0,0-.08.226l0,.015,0,.015q-.172.887-.346,1.777-.213,1.091-.425,2.184l-.01.047a.541.541,0,0,0-.02.166Zm2.052-1.812c-.035,0-.07,0-.106,0a.636.636,0,0,1-.458-.179c-.089-.119-.081-.277-.035-.528l.036-.2.007.007c.035-.179.073-.363.108-.536l.073-.343a.555.555,0,0,1,.552-.36,1.889,1.889,0,0,1,.745.1.806.806,0,0,1,.472.449.99.99,0,0,1-.03.776l-.007.013a1.536,1.536,0,0,1-.911.745A2.067,2.067,0,0,1,11.75,15.316Zm-.413-.512a.307.307,0,0,0,.021.2c.035.046.133.076.308.095a1.579,1.579,0,0,0,.476-.049,1.322,1.322,0,0,0,.781-.645.775.775,0,0,0,.025-.6.6.6,0,0,0-.351-.331,1.712,1.712,0,0,0-.674-.085.34.34,0,0,0-.35.23l-.061.3c-.048.236-.1.493-.145.729Z" style="fill:#fefefe"/><path d="M18.545,16.894c.255-1.322.515-2.644.771-3.961a.426.426,0,0,1,.449-.449h2.348a1.231,1.231,0,0,1,1.107.623,1.587,1.587,0,0,1,.189.934,2.35,2.35,0,0,1-.694,1.465,2.186,2.186,0,0,1-1.148.5c-.4.01-.8.015-1.2.026-.23-.02-.459.041-.515.225-.071.25-.122.5-.194.745a.42.42,0,0,1-.265.23c-.23.005-.464.005-.694.01C18.453,17.246,18.5,17.1,18.545,16.894Zm1.638-2.266c.066-.347.148-.74.209-1.046a.452.452,0,0,1,.449-.3,1.825,1.825,0,0,1,.715.092.766.766,0,0,1,.383,1.082,1.437,1.437,0,0,1-.852.7,1.651,1.651,0,0,1-.51.051c-.439-.046-.475-.163-.4-.582Z" style="fill:#373435"/><path d="M18.687,17.348a.284.284,0,0,1-.232-.085c-.076-.091-.05-.214-.023-.344l.009-.045q.21-1.089.423-2.176.173-.886.345-1.77a.5.5,0,0,1,.138-.377.559.559,0,0,1,.423-.173h2.343a1.327,1.327,0,0,1,1.2.681,1.694,1.694,0,0,1,.2.99,2.459,2.459,0,0,1-.724,1.532l-.012.011a2.288,2.288,0,0,1-1.2.521c-.206.006-.407.009-.607.013l-.6.013h-.012c-.162-.014-.364.016-.4.15s-.065.244-.1.366-.062.251-.1.377a.509.509,0,0,1-.326.3l-.019.008h-.02l-.345.005-.349.005Zm-.067-.22a.238.238,0,0,0,.076.007l.352-.005.322,0c.108-.048.17-.1.187-.154.035-.123.066-.246.1-.368s.062-.249.1-.375c.065-.214.3-.329.621-.3l.594-.013.6-.013a2.083,2.083,0,0,0,1.08-.474,2.246,2.246,0,0,0,.659-1.392,1.486,1.486,0,0,0-.178-.879,1.144,1.144,0,0,0-1.018-.564H19.765a.341.341,0,0,0-.263.107.285.285,0,0,0-.08.226l0,.015,0,.015q-.173.891-.347,1.785-.212,1.087-.423,2.176h0l-.01.047a.541.541,0,0,0-.02.166Zm2.052-1.812c-.035,0-.07,0-.106,0a.636.636,0,0,1-.458-.179c-.089-.119-.081-.277-.035-.528l.036-.2.007.007c.035-.18.073-.365.108-.539l.073-.341a.552.552,0,0,1,.552-.36,1.9,1.9,0,0,1,.745.1.806.806,0,0,1,.472.449.99.99,0,0,1-.03.776l-.007.013a1.536,1.536,0,0,1-.911.745A2.067,2.067,0,0,1,20.672,15.316Zm-.414-.511a.307.307,0,0,0,.021.2c.035.046.133.076.308.095a1.58,1.58,0,0,0,.476-.049,1.322,1.322,0,0,0,.781-.645.775.775,0,0,0,.025-.6.6.6,0,0,0-.351-.331,1.709,1.709,0,0,0-.674-.085.341.341,0,0,0-.35.23l-.061.3c-.048.237-.1.495-.145.731Z" style="fill:#fefefe"/><path d="M3.425,22.906a1.615,1.615,0,0,1-.3-.393,1.41,1.41,0,0,1-.173-.735c-.26-4.433-.031-8.31,1.382-11.478.173-.388.2-.505.561-.684a7.429,7.429,0,0,1,3.452-.4c.036-.1.107-.2.076-.3a9.955,9.955,0,0,0-3.146.25c-.7.112-1.382.235-1.55,1.347-1.412,3.739-1.31,7.28-1.163,10.759a2.433,2.433,0,0,0,.112.74c.275.877.541.847.75.893Z" style="fill:#ebefff"/><path d="M8.848,22.351c0-.923-.076-1.846-.076-2.773a5.413,5.413,0,0,0-.341-1.545,7.481,7.481,0,0,0-.7-1.025,7.387,7.387,0,0,1,.7,4.92C8.573,22.07,8.7,22.213,8.848,22.351Z" style="fill:#ebefff"/><path d="M8.924,22.534l-.071-.027a1.536,1.536,0,0,1-.66-.542l-.069-.087h.065c.015-.331.009-.634,0-.928-.006-.31-.013-.63.005-.982l0-.059.059.009a.788.788,0,0,1,.69.6l0,.008v.008c-.005.344-.009.65-.013.955s-.008.622-.013.97Zm-.631-.614a1.519,1.519,0,0,0,.526.458c0-.316.008-.6.012-.891,0-.3.008-.607.013-.947a.672.672,0,0,0-.544-.505c-.014.324-.008.623,0,.913C8.3,21.255,8.31,21.572,8.293,21.92Z" style="fill:#373435"/><path d="M10.252,23.657a1.022,1.022,0,0,1-.5-.423c-.036-1.648-.067-3.3-.1-4.949l.251.25a6.049,6.049,0,0,1,.077,1.051l.077.2A37.7,37.7,0,0,0,10.252,23.657Z" style="fill:#ebefff"/><path d="M10.335,24.023,10.265,24a1.209,1.209,0,0,1-.673-.586L9.585,23.4V23.38c0-.549.01-1.117.01-1.673v-.014l.007-.012c.151-.275.281-.452.423-.424.111.022.236.151.32.935,0,.583-.01,1.177-.01,1.758Zm-.643-.65a1.124,1.124,0,0,0,.537.5c0-.557.005-1.124.01-1.674-.078-.729-.19-.829-.234-.838s-.13.047-.3.359C9.7,22.27,9.7,22.831,9.692,23.374Zm-.044.009h0Z" style="fill:#373435"/><path d="M8.5,18.057a.708.708,0,0,0-.036-.25c.041.01.082.015.122.026l.647.526a.377.377,0,0,0,.2-.2.27.27,0,0,1,.214.1c.01.419-.02.832-.01,1.25a.356.356,0,0,1,.122.225,7.181,7.181,0,0,1,.8.077c.015.066.036.107.051.174a4.038,4.038,0,0,0-.9,0v.189a2.838,2.838,0,0,1,.7.051c.01.056.015.082.025.138a2.831,2.831,0,0,0-.749.01c.031,1.031.041,2.052,0,3.088-.082-.194-.239-.383-.326-.577a19.57,19.57,0,0,0,.061-3.976A2.746,2.746,0,0,0,8.5,18.057Z" style="fill:#373435"/><path d="M9.544,23.524a1.979,1.979,0,0,0-.155-.274,2.414,2.414,0,0,1-.17-.3L9.2,22.909l.006-.045a19.407,19.407,0,0,0,.062-3.9,2.7,2.7,0,0,0-.852-.767l-.09-.058.02-.106a.343.343,0,0,0-.018-.113c-.007-.027-.013-.053-.018-.079l-.046-.245.242.06.052.011c.023,0,.047.009.07.015l.034.009.584.474a.156.156,0,0,0,.039-.057l.039-.1h.111a.427.427,0,0,1,.345.171l.027.039v.048c.005.213,0,.427-.005.633,0,.183-.009.372-.006.558a.572.572,0,0,1,.086.131c.166.007.33.029.49.049l.206.025.112.013.025.11a.73.73,0,0,0,.021.072c.01.031.021.063.03.1l.049.212-.217-.017-.039,0,.073.4-.211-.022a2.894,2.894,0,0,0-.569-.009c.032,1.14.03,2.082,0,2.954ZM9.53,22.86l.019.036q0-.108,0-.219Q9.542,22.769,9.53,22.86ZM9.315,18.5a1.989,1.989,0,0,1,.175.215c0-.115,0-.231,0-.346A.62.62,0,0,1,9.315,18.5Z" style="fill:#373435"/><path d="M9.121,8.964a3.473,3.473,0,0,0,1.307-.449,5.948,5.948,0,0,1,2.593-.75,1.8,1.8,0,0,0-1.2-.1A7.176,7.176,0,0,0,9.121,8.964Z" style="fill:#ebefff"/><path d="M14.114,8.41a10.412,10.412,0,0,1,6.65.3,9.77,9.77,0,0,0-6.624-.447C14.139,8.365,14.114,8.314,14.114,8.41Z" style="fill:#ebefff"/></svg>    
                </div>
            </div>
        </section>

        <section id="portfolio" class="p-6 bg-white rounded-lg shadow-md mt-4">
            <h2 class="text-2xl font-bold text-center">Портфолио</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="card">
                    <a href="http://example1.com" class="block border rounded-lg overflow-hidden shadow-lg">
                        <img src="" alt="Site 1" class="w-full">
                        <p class="p-2">Site 1</p>
                    </a>
                </div>
                <div class="card">
                    <a href="http://example2.com" class="block border rounded-lg overflow-hidden shadow-lg">
                        <img src="" alt="Site 2" class="w-full">
                        <p class="p-2">Site 2</p>
                    </a>
                </div>
                <div class="card">
                    <a href="http://example3.com" class="block border rounded-lg overflow-hidden shadow-lg">
                        <img src="" alt="Site 3" class="w-full">
                        <p class="p-2">Site 3</p>
                    </a>
                </div>
                <div class="card">
                    <a href="http://example4.com" class="block border rounded-lg overflow-hidden shadow-lg">
                        <img src="path/to/site4.png" alt="Site 4" class="w-full">
                        <p class="p-2">Site 4</p>
                    </a>
                </div>
                <!-- Добавьте больше карточек по мере необходимости -->
            </div>
        </section>

        <section id="team" class="p-6 bg-white rounded-lg shadow-md mt-4">
            <h2 class="text-2xl font-bold text-center">Команда</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="card">
                    <img src="{{ asset('image/team.jpg') }}" alt="разработчик 1" class="w-full">
                    <p class="p-2">Developer 1</p>
                </div>
                <div class="card">
                    <img src="{{ asset('image/team.jpg') }}" alt="разработчик 2" class="w-full">
                    <p class="p-2">Developer 2</p>
                </div>
                <div class="card">
                    <img src="{{ asset('image/team.jpg') }}" alt="разработчик 3" class="w-full">
                    <p class="p-2">Developer 3</p>
                </div>
                <!-- Добавьте больше карточек по мере необходимости -->
            </div>
        </section>

        <section id="contact" class="p-4 md:p-6 bg-white rounded-lg shadow-md mt-4 mx-2 md:mx-4">
            <h2 class="text-2xl font-bold text-center mb-8">Свяжитесь с нами</h2>
            <div class="max-w-2xl mx-auto px-2 md:px-6">
                <form action="/submit-form" method="post" class="space-y-6">
                    <div class="relative">
                        <input type="text" 
                               id="name" 
                               name="name" 
                               required 
                               class="w-full px-3 md:px-4 py-3 rounded-lg border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 transition-colors bg-gray-50 outline-none peer text-sm md:text-base"
                               placeholder=" "
                        >
                        <label for="name" 
                               class="absolute left-3 md:left-4 top-3 text-gray-500 transition-all duration-300 
                              peer-focus:-top-6 peer-focus:text-sm peer-focus:text-gray-500
                              peer-placeholder-shown:top-3 peer-placeholder-shown:text-base
                              -top-6 text-sm"
                        >
                            Ваше имя
                        </label>
                    </div>

                    <div class="relative">
                        <input type="email" 
                               id="email" 
                               name="email" 
                               required 
                               class="w-full px-3 md:px-4 py-3 rounded-lg border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 transition-colors bg-gray-50 outline-none peer text-sm md:text-base"
                               placeholder=" "
                        >
                        <label for="email" 
                               class="absolute left-3 md:left-4 top-3 text-gray-500 transition-all duration-300
                              peer-focus:-top-6 peer-focus:text-sm peer-focus:text-gray-500
                              peer-placeholder-shown:top-3 peer-placeholder-shown:text-base
                              -top-6 text-sm"
                        >
                            Email адрес
                        </label>
                    </div>

                    <div class="relative">
                        <textarea id="message" 
                                  name="message" 
                                  required 
                                  rows="5"
                                  class="w-full px-3 md:px-4 py-3 rounded-lg border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 transition-colors bg-gray-50 outline-none peer resize-none text-sm md:text-base"
                                  placeholder=" "
                        ></textarea>
                        <label for="message" 
                               class="absolute left-3 md:left-4 top-3 text-gray-500 transition-all duration-300
                              peer-focus:-top-6 peer-focus:text-sm peer-focus:text-gray-500
                              peer-placeholder-shown:top-3 peer-placeholder-shown:text-base
                              -top-6 text-sm"
                        >
                            Ваше сообщение
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" 
                                class="w-full md:w-auto px-6 md:px-8 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white rounded-lg hover:from-gray-700 hover:to-gray-800 transition-all duration-300 transform hover:scale-105 shadow-lg text-sm md:text-base"
                        >
                            Отправить сообщение
                        </button>
                    </div>
                </form>

                <div class="mt-8 md:mt-12 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 text-center">
                    <div class="p-3 md:p-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base">info@ourcompany.com</p>
                    </div>
                    <div class="p-3 md:p-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base">+7 (999) 999-99-99</p>
                    </div>
                    <div class="p-3 md:p-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base">г. Москва, ул. Примерная, д. 1</p>
                    </div>
                </div>
            </div>
        </section>

    <footer class="bg-gradient-to-l from-gray-700 to-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">OurCompany</h3>
                    <p>Создаем качественные веб-решения для вашего бизнеса</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Контакты</h3>
                    <ul class="space-y-2">
                        <li>Email: info@ourcompany.com</li>
                        <li>Телефон: +7 (999) 999-99-99</li>
                        <li>Адрес: г. Москва, ул. Примерная, д. 1</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Навигация</h3>
                    <ul class="space-y-2">
                        <li><a href="#about" class="hover:underline">О нас</a></li>
                        <li><a href="#services" class="hover:underline">Услуги</a></li>
                        <li><a href="#contact" class="hover:underline">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="bg-gray-600 mt-8 p-8 text-center shadow">
                <p>&copy; 2024 OurCompany. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <script>
            // Добавьте этот скрипт в конец файла или в отдельный файл JavaScript
            document.addEventListener('DOMContentLoaded', function() {
                const slider = document.getElementById('reviewsSlider');
                const slides = slider.children;
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                const dots = document.querySelectorAll('.slider-dot');
                
                let currentSlide = 0;
                const slidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
                const slideWidth = 100 / slidesToShow;
                
                // Устанавливаем начальную ширину слайдов
                Array.from(slides).forEach(slide => {
                    slide.style.width = `${slideWidth}%`;
                });

                function updateSlider() {
                    slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
                    
                    // Обновляем активный индикатор
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('bg-blue-500', index === currentSlide);
                    });
                }

                prevButton.addEventListener('click', () => {
                    currentSlide = Math.max(currentSlide - 1, 0);
                    updateSlider();
                });

                nextButton.addEventListener('click', () => {
                    currentSlide = Math.min(currentSlide + 1, slides.length - slidesToShow);
                    updateSlider();
                });

                // Обработка клика по индикаторам
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentSlide = index;
                        updateSlider();
                    });
                });

                // Обновляем слайдер при изменении размера окна
                window.addEventListener('resize', () => {
                    const newSlidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
                    if (newSlidesToShow !== slidesToShow) {
                        location.reload();
                    }
                });
            });
        </script>
    <script>
        // Мобильное меню
        document.getElementById('nav-toggle').addEventListener('click', function() {
            const nav = document.querySelector('nav ul');
            nav.classList.toggle('hidden');
        });

        // Скрытие/показ шапки при прокрутке
        let lastScrollTop = 0;
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                header.classList.add('header-hidden');
            } else {
                header.classList.remove('header-hidden');
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });

        // Плавная прокрутка к якорям
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
