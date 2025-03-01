<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>OurCompany - Разработка сайтов</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
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
    <section id="about" class="pt-20 min-h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('/image/welcome.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10 text-white">
            <div class="space-y-4 text-center" style="max-width:50%; margin: auto">
                <p class="text-xl leading-relaxed">Мы специализируемся на разработке современных веб-решений с 5-летним опытом в индустрии. От простых лендингов до сложных CRM-систем - мы создаем эффективные цифровые решения для вашего бизнеса.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">

                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="stat-card bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all cursor-pointer">
                            <div class="text-3xl font-bold text-yellow-400 counter" data-target="150">0</div>
                            <p class="text-sm mt-2">Завершенных проектов</p>
                        </div>
                        <div class="stat-card bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all cursor-pointer">
                            <div class="text-3xl font-bold text-yellow-400 counter" data-target="98">0</div>
                            <p class="text-sm mt-2">Довольных клиентов</p>
                        </div>
                        <div class="stat-card bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all cursor-pointer">
                            <div class="text-3xl font-bold text-yellow-400 counter" data-target="5">0</div>
                            <p class="text-sm mt-2">Лет опыта</p>
                        </div>
                        <div class="stat-card bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all cursor-pointer">
                            <div class="text-3xl font-bold text-yellow-400 counter" data-target="24">0</div>
                            <p class="text-sm mt-2">Текущих проектов</p>
                        </div>
                    </div>

                    <div class="space-y-6 mt-8">
                        <h3 class="text-2xl font-semibold">Наши преимущества</h3>
                        <div class="space-y-4">
                            <div class="feature-item flex items-center space-x-4 bg-white bg-opacity-10 p-4 rounded-lg hover:bg-opacity-20 transition-all cursor-pointer">
                                <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <div>
                                    <h4 class="font-semibold">Быстрая разработка</h4>
                                    <p class="text-sm text-gray-300">Среднее время разработки проекта - 2 недели</p>
                                </div>
                            </div>
                            <div class="feature-item flex items-center space-x-4 bg-white bg-opacity-10 p-4 rounded-lg hover:bg-opacity-20 transition-all cursor-pointer">
                                <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <div>
                                    <h4 class="font-semibold">Гарантия качества</h4>
                                    <p class="text-sm text-gray-300">6 месяцев бесплатной поддержки</p>
                                </div>
                            </div>
                            <div class="feature-item flex items-center space-x-4 bg-white bg-opacity-10 p-4 rounded-lg hover:bg-opacity-20 transition-all cursor-pointer">
                                <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <h4 class="font-semibold">Гибкая оплата</h4>
                                    <p class="text-sm text-gray-300">Возможность оплаты проекта частями</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="#contact" class="inline-flex items-center px-6 py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 transition-colors group mb-4">
                            Отправить заявку
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all transform hover:-translate-y-1">
                                <h4 class="font-semibold text-yellow-400">Веб-разработка</h4>
                                <p class="text-sm mt-2">Создание современных и функциональных веб-сайтов любой сложности</p>
                            </div>
                            <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all transform hover:-translate-y-1 translate-y-4">
                                <h4 class="font-semibold text-yellow-400">UI/UX Дизайн</h4>
                                <p class="text-sm mt-2">Разработка удобных и привлекательных пользовательских интерфейсов</p>
                            </div>
                        </div>
                        <div class="space-y-4 translate-y-8">
                            <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all transform hover:-translate-y-1">
                                <h4 class="font-semibold text-yellow-400">Поддержка</h4>
                                <p class="text-sm mt-2">Техническая поддержка и обслуживание веб-проектов</p>
                            </div>
                            <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition-all transform hover:-translate-y-1">
                                <h4 class="font-semibold text-yellow-400">Оптимизация</h4>
                                <p class="text-sm mt-2">SEO-оптимизация и улучшение производительности сайтов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-3xl font-bold text-center mb-4">Наши услуги</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Предоставляем полный спектр услуг по разработке и поддержке веб-проектов любой сложности</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Разработка -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100 service-card">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Разработка сайтов</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Сайты-визитки от 15 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Лендинги от 15 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Интернет-магазины от 50 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Корпоративные сайты от 30 000 ₽</span>
                        </li>
                    </ul>
                </div>

                <!-- Поддержка -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100 service-card">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Поддержка и доработка</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Доработка сайта от 5 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Перенос на другой хостинг от 3 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Сопровождение от 10 000 ₽/мес</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">WordPress, Joomla поддержка</span>
                        </li>
                    </ul>
                </div>

                <!-- Дополнительные услуги -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-gray-100 service-card">
                    <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Интеграции и разработка</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Платёжные системы от 5 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Интеграция CRM от 10 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-600">Разработка скриптов от 1 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
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
                            Настройка аналитики
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Оптимизация скорости
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Портфолио -->
    <section id="portfolio" class="p-6 bg-white rounded-lg shadow-md mt-4">
        <h2 class="text-2xl font-bold text-center">Портфолио</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card portfolio-card">
                <a href="http://example1.com" class="block border rounded-lg overflow-hidden shadow-lg">
                    <img src="" alt="Site 1" class="w-full">
                    <p class="p-2">Site 1</p>
                </a>
            </div>
            <div class="card portfolio-card">
                <a href="http://example2.com" class="block border rounded-lg overflow-hidden shadow-lg">
                    <img src="" alt="Site 2" class="w-full">
                    <p class="p-2">Site 2</p>
                </a>
            </div>
            <div class="card portfolio-card">
                <a href="http://example3.com" class="block border rounded-lg overflow-hidden shadow-lg">
                    <img src="" alt="Site 3" class="w-full">
                    <p class="p-2">Site 3</p>
                </a>
            </div>
            <div class="card portfolio-card">
                <a href="http://example4.com" class="block border rounded-lg overflow-hidden shadow-lg">
                    <img src="path/to/site4.png" alt="Site 4" class="w-full">
                    <p class="p-2">Site 4</p>
                </a>
            </div>
            <!-- Добавьте больше карточек по мере необходимости -->
        </div>
    </section>

    <!-- Наша команда -->
    <section id="team" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Наша команда</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Профессионалы, которые воплощают ваши идеи в реальность</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Разработчик 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 team-card">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/team.jpg') }}" 
                             alt="Frontend Developer" 
                             class="w-full h-64 object-cover object-center group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4">
                                <div class="flex gap-3 mb-4">
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Фалолеев Михаил</h3>
                        <p class="text-blue-600 font-medium mb-4">Frontend Разработчик</p>
                        <p class="text-gray-600">Специалист по созданию современных и отзывчивых пользовательских интерфейсов</p>
                    </div>
                </div>

                <!-- Разработчик 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 team-card">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/team.jpg') }}" 
                             alt="Backend Developer" 
                             class="w-full h-64 object-cover object-center group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4">
                                <div class="flex gap-3 mb-4">
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Салихов Роман</h3>
                        <p class="text-green-600 font-medium mb-4">Backend Разработчик</p>
                        <p class="text-gray-600">Эксперт по разработке серверной части и оптимизации баз данных</p>
                    </div>
                </div>

                <!-- Разработчик 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 team-card">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/team.jpg') }}" 
                             alt="Full Stack Developer" 
                             class="w-full h-64 object-cover object-center group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4">
                                <div class="flex gap-3 mb-4">
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-white hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Коробков Андрей</h3>
                        <p class="text-purple-600 font-medium mb-4">Full Stack Разработчик</p>
                        <p class="text-gray-600">Разработчик полного цикла с опытом создания комплексных веб-приложений</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="p-4 md:p-6 bg-white rounded-lg shadow-md my-4">
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
                    <p class="text-gray-600 text-sm md:text-base">pomah4uk@gmail.com</p>
                </div>
                <div class="p-3 md:p-4">
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base">+7 (923) 412 81 69</p>
                </div>
                <div class="p-3 md:p-4">
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base">Работаем по всей России</p>
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
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/about.js') }}"></script>
</body>
</html>
