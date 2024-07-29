@extends('app-page/service-page/service')
@section('content')
    <section class="breadcrumbs">
        <div class="wrap-breadcrumbs">
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('/.index')}}">Главная</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('servicePage')}}">Услуги</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Сборка
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Сборка.
            </li>
            <li class="block-info-content-item">
                При всей кажущейся простоте сборка мебели — это достаточно сложный процесс, требующий участия профессионалов и учета множества мелочей. Поэтому не рекомендуется производить сборку мебели самостоятельно без соответствующей подготовки и опыта.
            </li>
            <li class="block-info-content-item">
                Наши специалисты оснащены профессиональным оборудованием и инструментами, обладают знаниями о технологических особенностях изготовления мебельных изделий различных мебельных фабрик, о свойствах материалов и конструкций, особенностях фурнитуры, приемах обработки, последовательности монтажа и т. п.
            </li>
            <li class="block-info-content-item inform-bold">
                Оформление услуги.
            </li>
            <li class="block-info-content-item">
                Услугу сборки можно оформить и оплатить:
            </li>
            <li class="block-info-content-item">
                - Через оператора. Вы можете заказать сборку в момент подверждения заказа (подтверждение заказа происходит в течении 24 часов после оплаты товара на сайте) или при покупки товара в магазине. Оплата сборки производится наличными в магазине или же при окончании сборки. Подробности о стоимости сборки и оплате просим уточнять у менеджера по телефону: +7 991 345-82-68
            </li>
            <li class="block-info-content-item inform-bold">
                Условия предоставления услуги.
            </li>
            <li class="block-info-content-item">
                Сотрудник сервиса послепродажного обслуживания или оператор интернет-магазина согласовывает день сборки с покупателем при оформлении услуги.
            </li>
            <li class="block-info-content-item">
                Услуги по сборке мебели/установке бытовой техники осуществляются в период с 10.00 до 19.30 ежедневно.
            </li>
            <li class="block-info-content-item">
                Время оказания услуги подтверждается Исполнителем по телефону в день оказания услуги.
            </li>
            <li class="block-info-content-item">
                Для осуществления сборки/установки товара необходимо предоставить следующие документы:
            </li>
            <li class="block-info-content-item">
                - Заказ на продажу товара;
            </li>
            <li class="block-info-content-item">
                - Кассовый чек об оплате товара;
            </li>
            <li class="block-info-content-item">
                - Заявка на оказание услуги по сборке и кассовый чек об оплате сборки;
            </li>
            <li class="block-info-content-item">
                - Документ, удостоверяющий личность;
            </li>
            <li class="block-info-content-item">
                - Дизайн-проект (при наличии);
            </li>
            <li class="block-info-content-item">
                - Чертеж (для кухонь).
            </li>
            <li class="block-info-content-item inform-bold">
                Внимание!
            </li>
            <li class="block-info-content-item">
                - Подлежащие установке мебель и оборудование должны находиться непосредственно в том месте, в котором производится установка.
            </li>
            <li class="block-info-content-item">
                - При наличии пропускного режима в месте оказания услуги необходимо обеспечить оформление пропуска на территорию для проезда автотранспорта специалиста.
            </li>
            <li class="block-info-content-item">
                - В случае наличия только платной парковки в месте оказания услуги необходимо обеспечить оплату парковочного места для автотранспорта специалиста.
            </li>
            <li class="block-info-content-item">
                - Температура в помещении для сборки мебели должна быть в диапазоне от + 17°С до +27°С.
            </li>
            <li class="block-info-content-item">
                - Подключение газовых приборов осуществляется только региональной службой газового хозяйства.
            </li>
            <li class="block-info-content-item">
                - Навеска на керамогранит, гранит и мрамор не производится.
            </li>
            <li class="block-info-content-item">
                - Для выполнения навески мебели необходимо предоставить сборщику стремянку либо устойчивый стол/стул/табурет.
            </li>

            <li class="block-info-content-item">
                - Всё оборудование обязательно должно быть заземлено.
            </li>
            <li class="block-info-content-item">
                - Услуги, связанные с вырезкой отверстий, обрезкой, врезкой стеклянных изделий и изделий из металла не производятся.
            </li>
            <li class="block-info-content-item">
                - Изготовление новых деталей из оставшегося после сборки материала не выполняется.
            </li>
            <li class="block-info-content-item">
                - Сборка элементов мебели/установка бытовой техники, купленных не в магазине My Décor Room, переделка шкафов под установку бытовой техники, купленной не в магазине My Décor Room, выполняется по предварительному согласованию и оплачивается дополнительно согласно
            </li>
            <li class="block-info-content-item inform-bold">
                Прейскуранту цен на отдельные виды услуг.
            </li>
            <li class="block-info-content-item">
                - При наличии дизайн-проекта сборка/установка производится в строгом соответствии с дизайн-проектом.
            </li>
            <li class="block-info-content-item">
                - В случае любых изменений размеров помещения от первоначально согласованных, претензии, связанные с недостатками товара и услуг, вызванные такими изменениями, не принимаются.
            </li>
            <li class="block-info-content-item">
                - Перед установкой и подключением люстр/светильников необходимо предоставить схему электропроводки. В случае отсутствия такой схемы, вся ответственность за повреждение внутренних коммуникаций и вред, причинённый этими повреждениями (включая вред, нанесенный третьими лицами), ложится на Покупателя.
            </li>
            <li class="block-info-content-item">
                - Уборка упаковочного материала производится при наличии строительного контейнера не дальше 100 м от помещения покупателя. В случае отсутствия контейнера упаковочный мусор складывается в помещении в место, где производились работы.
            </li>
            <li class="block-info-content-item">
                - В случае вашего отсутствия (доверенного лица) в согласованное время в месте оказания услуги, специалист вправе отказать в оказании услуги, в случае необходимости ожидания более 30 минут.
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
