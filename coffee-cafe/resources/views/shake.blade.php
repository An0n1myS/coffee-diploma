
@extends('layout.app')

@section('content')
    <style>
        .empty{
            height: 25px;
            background: #ef4444;
        }
    </style>

    <div class="info w-full" style="background: url('image/sublogo.jpg'); background-size: cover; background-repeat: no-repeat;">
        <br>
        <br>
        <br>
        <h2 class="text-white text-xl text-start w-5/6 m-auto pt-32">Make your cocktail</h2>
        <br>
        <br>
    </div>
    <div class="flex bg-neutral-800/95 w-[100%] mb-0 pb-0">
        <div class="container mx-auto my-20 flex w-5/6">
            <div class="ingredients-list flex-1 p-8 basis-2/5">
                <h2 class="mb-6 text-[22px] text-white ">Інгредієнти</h2>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/lime.jpg')}}" alt="Лайм" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/mint.jpg')}}" alt="М'ята" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/ginger.jpg')}}" alt="Імбир" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/rum.jpg')}}" alt="Ром" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/sugar.jpg')}}" alt="Цукор" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/orange.jpg')}}" alt="Апельсин" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/lemon.jpg')}}" alt="Лимон" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/milk.jpg')}}" alt="Молоко" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/chocolate.jpg')}}" alt="Шоколад" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
                <div class="ingredient inline-block m-2">
                    <img src="{{asset('ingredients/coffee.jpg')}}" alt="Кава" class="w-16 h-16 rounded-full cursor-grab" draggable="true">
                </div>
            </div>
            <div class="cocktail-container p-8 basis-3/5">
                <div class="cocktail flex flex-row justify-around w-full">
                    <div class="w-[260px] h-[510px] border-2 border-white rounded-b-[5rem]">
                        <div class="glass w-[250px] h-[500px] overflow-hidden border-2 border-black rounded-b-[5rem] flex flex-col justify-center items-center relative basis-2/4 ">
                            <div class="w-[100%] h-[98%] bg-white rounded-b-[2rem] p-2">
                                <div class="  ingredient-placeholder absolute w-[95%] h-[98%] rounded-b-[3rem] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-bold text-gray-700"></div>

                            </div>
                        </div>
                    </div>
                    <div class="basis-3/4 flex flex-col justify-center items-center">
                        <div class="buttons flex flex-col justify-between ">
                            <button class="clear-btn bg-red-500 text-white px-4 py-2 rounded-full mb-4">Відмінити останній вибір</button>
                            <button class="reset-btn bg-yellow-500 text-white px-4 py-2 rounded-full mb-4">Почати з початку</button>
                            <button class="confirm-btn bg-green-700 text-white px-4 py-2 rounded-full mb-4">Підтвердити</button>
                        </div>
                        <div class="publish-buttons mt-4 flex flex-col justify-between" style="display:none;">
                            <button class="publish-btn bg-blue-500 text-white px-4 py-2 rounded-full mb-4">Опублікувати</button>
                            <button class="send-to-baristas-btn bg-purple-500 text-white px-4 py-2 rounded-full mb-4">Надіслати баристам</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const ingredients = document.querySelectorAll('.ingredient');
        const glass = document.querySelector('.glass');
        const ingredientPlaceholder = document.querySelector('.ingredient-placeholder');

        // Масив для зберігання інгредієнтів
        const addedIngredients = [];

        // Event listener для інгредієнтів
        ingredients.forEach(ingredient => {
            ingredient.addEventListener('dragstart', onDragStart);
        });

        // Event listener для glass
        glass.addEventListener('dragover', onDragOver);
        glass.addEventListener('drop', onDrop);

        // Функція обробки події drag start для інгредієнтів
        function onDragStart(event) {
            event.dataTransfer.setData('text/plain', event.target.alt);
        }

        // Функція обробки події drag over для glass
        function onDragOver(event) {
            event.preventDefault();
        }

        // Функція обробки події drop для glass
        function onDrop(event) {
            event.preventDefault();
            const ingredientName = event.dataTransfer.getData('text/plain');
            addedIngredients.push(ingredientName.toLowerCase());

            // Створюємо інгредієнт в glass
            const ingredientDiv = document.createElement('div');
            ingredientDiv.classList.add('empty', ingredientName.toLowerCase()); // Додаємо клас ingredient
            glass.appendChild(ingredientDiv);

            // Змінюємо колір бокалу в залежності від інгредієнтів
            const bgColor = getBackgroundColor(addedIngredients);
            console.log(bgColor);
            glass.style.backgroundColor = bgColor;
        }


        // Функція для визначення кольору бокалу в залежності від інгредієнтів
        function getBackgroundColor(ingredients) {
            const colorMap = {
                'лайм': '#00FF00',
                'м\'ята': '#008000',
                'імбир': '#FFA500',
                'ром': '#8B4513',
                'цукор': '#FFFFFF',
                'апельсин': '#FFA500',
                'лимон': '#FFFF00',
                'молоко': '#FFFFFF',
                'шоколад': '#8B4513',
                'кава': '#A52A2A' // Добавил цвет для кавы
            };

            console.log('Color Map:', colorMap);
            console.log('Added Ingredients:', addedIngredients);
            // Створюємо масив кольорів інгредієнтів
            const ingredientColors = ingredients.map(ingredient => colorMap[ingredient]).filter(color => color);

            // Якщо немає кольорів, використовуємо червоний колір
            if (ingredientColors.length === 0) {
                return '#FF0000';
            }

            // Змішуємо кольори інгредієнтів
            const blendedColor = blendColors(ingredientColors);

            return blendedColor;
        }

        // Функція для змішування кольорів
        function blendColors(colors) {
            const totalColors = colors.length;

            // Розділяємо значення RGB кожного кольору
            const separatedColors = colors.map(color => {
                return {
                    r: parseInt(color.substring(1, 3), 16),
                    g: parseInt(color.substring(3, 5), 16),
                    b: parseInt(color.substring(5, 7), 16)
                };
            });

            // Сумуємо всі значення R, G та B
            const sumColor = separatedColors.reduce((acc, color) => {
                acc.r += color.r;
                acc.g += color.g;
                acc.b += color.b;
                return acc;
            }, { r: 0, g: 0, b: 0 });

            // Обчислюємо середнє значення кольорів
            const blendedColor = {
                r: Math.round(sumColor.r / totalColors),
                g: Math.round(sumColor.g / totalColors),
                b: Math.round(sumColor.b / totalColors)
            };

            // Перетворюємо змішаний колір у формат RGB
            return rgbToHex(blendedColor.r, blendedColor.g, blendedColor.b);
        }

        // Функція для перетворення RGB у шестнадцятковий код кольору
        function rgbToHex(r, g, b) {
            const toHex = val => {
                const hex = val.toString(16);
                return hex.length === 1 ? '0' + hex : hex;
            };

            return `#${toHex(r)}${toHex(g)}${toHex(b)}`;
        }

        // Ваши текущие объявления кнопок
        const clearBtn = document.querySelector('.clear-btn');
        const resetBtn = document.querySelector('.reset-btn');
        const confirmBtn = document.querySelector('.confirm-btn');
        const publishBtn = document.querySelector('.publish-btn');
        const sendToBaristasBtn = document.querySelector('.send-to-baristas-btn');

        // Обработчик события для кнопки "Відмінити останній вибір"
        clearBtn.addEventListener('click', undoLastChoice);

        // Обработчик события для кнопки "Почати з початку"
        resetBtn.addEventListener('click', restartPage);

        // Обработчик события для кнопки "Підтвердити"
        confirmBtn.addEventListener('click', showPublishButtons);

        // Обработчик события для кнопки "Опублікувати"
        //publishBtn.addEventListener('click', publishCocktail);

        // Обработчик события для кнопки "Надіслати баристам"
        //sendToBaristasBtn.addEventListener('click', sendToBaristas);

        // Функция для отмены последнего выбора
        function undoLastChoice() {
            const ingredients = document.querySelectorAll('.ingredient');
            const lastIngredient = addedIngredients.pop(); // Удаляем последний ингредиент из массива
            const lastIngredientDiv = document.querySelector(`.${lastIngredient}`);

            // Удаляем последний ингредиент из стакана
            if (lastIngredientDiv) {
                lastIngredientDiv.remove();
            }

            // Обновляем цвет бокала
            const bgColor = getBackgroundColor(addedIngredients);
            glass.style.backgroundColor = bgColor;
        }

        // Функция для перезагрузки страницы
        function restartPage() {
            location.reload();
        }

        // Функция для отображения кнопок "Опублікувати" і "Надіслати баристам"
        function showPublishButtons() {
            const publishButtonsContainer = document.querySelector('.publish-buttons');
            const ButtonsContainer = document.querySelector('.buttons');
            publishButtonsContainer.style.display = 'flex';
            ButtonsContainer.style.display = 'none';


        }


    </script>



@endsection
