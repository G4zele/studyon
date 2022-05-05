<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lesson;
use App\Entity\Course;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Курс программировагние на языке Python
        $pythonCourse = new Course();
        $pythonCourse->setCharacterCode('PPBI');
        $pythonCourse->setTitle('Программирование на Python');
        $pythonCourse->setDescription(
            'В этом курсе по программированию на языке Python вы познакомитесь ' .
            'с базовыми понятиями программирования. Едва ли возможно научиться программировать без практики, ' .
            'поэтому в качестве домашних заданий вам будет предложено довольно много задач, ' .
            'в которых вы сможете потренировать своё умение программировать.'
        );

        // Урок 1
        $lesson = new Lesson();
        $lesson->SetTitle('Общая информация о курсе');
        $lesson->setContent(
            'В этом вводном уроке мы расскажем вам о том, что вас ждёт, и дадим рекомендации ' .
            'по прохождению курса. Жмите кнопку «вправо», чтобы перейти к следующему шагу.'
        );
        $lesson->setNumber(1);
        $pythonCourse->addLesson($lesson);

        // Урок 2
        $lesson = new Lesson();
        $lesson->SetTitle('Введение: программы и Python. Проверка заданий');
        $lesson->setContent(
            'Мы начнем знакомство с языком Python с обзора самых базовых его возможностей, которые в то же ' .
            'время являются фундаментальными для разработки алгоритмов на большинстве широко используемых ' .
            'языков программирования: арифметические и логические операции, ' .
            'работа с переменными, условия, порядок выполнения.'
        );
        $lesson->setNumber(2);
        $pythonCourse->addLesson($lesson);

        // Урок 3
        $lesson = new Lesson();
        $lesson->SetTitle('Операции с целыми числами');
        $lesson->setContent('В этом уроке мы начнем пользоваться IPython Notebook.');
        $lesson->setNumber(3);
        $pythonCourse->addLesson($lesson);

        // Урок 4
        $lesson = new Lesson();
        $lesson->SetTitle('Операции с вещественными числами');
        $lesson->setContent(
            'В этом уроке мы рассмотрим математические операции с вещественными числами в языке Python.'
        );
        $lesson->setNumber(4);
        $pythonCourse->addLesson($lesson);

        $manager->persist($pythonCourse);

        // Курс Математическая статистика
        $statCourse = new Course();
        $statCourse->setCharacterCode('MSC');
        $statCourse->SetTitle('Математическая статистика');
        $statCourse->setDescription(
            'В рамках данного курса вы научитесь визуализировать данные; на основе наблюдаемых ' .
            'данных строить оценки неизвестных параметров распределения; узнаете, какие оценки являются хорошими; ' .
            'научитесь проверять гипотезы о законе распределения и параметрах распределения; сравнивать параметры ' .
            'распределений нескольких случайных величин, выявлять наличие и вид зависимостей  между случайными ' .
            'величинами по данным наблюдений.  Теоретический материал сопровождается модельными ' .
            'примерами и примерами из реальной жизни. '
        );

        // Урок 1
        $lesson = new Lesson();
        $lesson->SetTitle('Общие рекомендации. Моделирование');
        $lesson->setContent(
            'Освежите в памяти основные понятия и теоремы "Теории вероятностей": ' .
            'случайное событие, вероятностное пространство;  случайная величина; закон распределения ' .
            'случайной величины (распределение вероятностей, функция распределения, плотность распределения); ' .
            'математическое ожидание, дисперсия и их свойства;  начальные и центральные моменты; функции от ' .
            'случайных величин; зависимые и независимые события и случайные величины; случайные вектора, ' .
            'из распределения и характеристики; последовательности случайных величин, предельные теоремы ' .
            '(теоремы Муавра-Лапласа, закон больших чисел, центральная предельная теорема); основные законы ' .
            'распределений (норамльный, равномерный на [a,b], экспоненциальный, логистический, ' .
            'Пуассона, геометрический, биномиальный и др) .'
        );
        $lesson->setNumber(1);
        $statCourse->addLesson($lesson);

        // Урок 2
        $lesson = new Lesson();
        $lesson->SetTitle('Краткий обзор понятий теории вероятностей');
        $lesson->setContent(
            'Пространством элементарных событий W называется множество, содержащее ' .
            'все возможные результаты случайного эксперимента, из которых в эксперименте происходит ' .
            'ровно один. Элементы w этого множества называют элементарными исходами.'
        );
        $lesson->setNumber(2);
        $statCourse->addLesson($lesson);

        // Урок 3
        $lesson = new Lesson();
        $lesson->SetTitle('Выборка. Выборочное пространство');
        $lesson->setContent(
            'Основные задачи математической статистики: приближенное определение вероятности события по ' .
            'относительной частоте, нахождение приближенного закона распределения с.в, оценивание ' .
            'числовых характеристик или параметров распределения с.в., проверка статистических гипотез, ' .
            'определение эмпирической зависимости между переменными, описывающими случайное явление'
        );
        $lesson->setNumber(3);
        $statCourse->addLesson($lesson);

        // Урок 4
        $lesson = new Lesson();
        $lesson->SetTitle('Описательная статистика');
        $lesson->setContent(
            'Цель обработка, систематизация, графическое представление, ' .
            'расчет числовых статистических характеристик эмпирических данных'
        );
        $lesson->setNumber(4);
        $statCourse->addLesson($lesson);

        $manager->persist($statCourse);

        // Курс подготовки вожатых
        $campCourse = new Course();
        $campCourse->setCharacterCode('CAMP');
        $campCourse->SetTitle('Курс подготовки вожатых');
        $campCourse->setDescription(
            'Смешанный курс (оффлайн и онлайн) был разработан для подготовки педсостава #лагерьче, ' .
            'но доступен для широкого круга пользователей, которые хотят разобраться, как устроена работа с ' .
            'детьми в загородном лагере. В каждой теме есть блок теории и практики. Кураторы курса из числа ' .
            'педагогического состава загородного лагеря дают обратную связь.'
        );

        // Урок 1
        $lesson = new Lesson();
        $lesson->SetTitle('Логика развития смены ');
        $lesson->setContent(
            'Линейную смену можно сравнить с пеналом: много разных элементов, которые объединяет ' .
            'одно пространство. В основе проектирования данных видов смен применяется мероприятийный подход: ' .
            'берется набор мероприятий и распределяется по  сетке в соответствии с определенными правилами. ' .
            'У каждого мероприятия может быть своя тема, одно мероприятие не является продолжение следующего, ' .
            'может отсутствовать общелагерная система стимулирования. Наличие логики между мероприятиями и ' .
            'остальными элементами смены. не обязательно. В данном виде смен отсутствует специальная ' .
            'образовательная программа, но существуют кружки, которые могут быть абсолютно разной ' .
            'направленности. Участниками могут быть любые дети.'
        );
        $lesson->setNumber(1);
        $campCourse->addLesson($lesson);

        // Урок 2
        $lesson = new Lesson();
        $lesson->SetTitle('Отряд: группа команда');
        $lesson->setContent(
            'Не стоит сразу ожидать, что ваш отряд сразу станет командой. И иногда, к сожалению, отряд не ' .
            'превращается в команду и к концу смены. Для формирования требуется время, и в этом процессе люди ' .
            'проходят через вполне различимые и определённые стадии "созревания" - от группы незнакомых друг ' .
            'другу людей до сплочённой команды с общими целями. Модель Брюса
 Такмана даёт нам возможность осознанно ' .
            'посмотреть на эти этапы. Вожатый, зная о них и понимая, на какой стадии динамики развития находится ' .
            'отряд, сможет быстрее помочь команде и каждому ребенку достичь целей, ' .
            'которые ребята поставили на эту смену.'
        );
        $lesson->setNumber(2);
        $campCourse->addLesson($lesson);

        // Урок 3
        $lesson = new Lesson();
        $lesson->SetTitle('Отрядная работа');
        $lesson->setContent(
            'Детям в лагере нужно постоянно представляются возможности для самореализации: ' .
            'в творчестве, спорте, интеллектуальной деятельности. Это именно то, для чего они приезжают ' .
            'лагерь и над чем работает вся команда педагогического состава. Если такое пространство не ' .
            'создает вожатый, то дети сами будут создавать его себе. В этом случае есть риск, это может ' .
            'быть небезопасно и противоречить целям смены. В лагере есть очевидная примета: если в отряде ' .
            'постоянно ЧП и травматизм, то педагогическая команда отряда не занимается детьми. '
        );
        $lesson->setNumber(3);
        $campCourse->addLesson($lesson);

        // Урок 4
        $lesson = new Lesson();
        $lesson->SetTitle('Как учитывать возрастные особенности');
        $lesson->setContent(
            'Возрастная характеристика среднего возраста (10-14 лет) Ребята в этом возрасте бурно проявляют ' .
            'эмоции, что влечет за собой большое количество конфликтов, причем не только со сверстниками, ' .
            'но и со взрослыми – родителями, вожатыми, сотрудниками лагеря. ' .
            'Объясняется это началом процесса полового созревания.'
        );
        $lesson->setNumber(4);
        $campCourse->addLesson($lesson);

        $manager->persist($campCourse);

        $manager->flush();
    }
}
