<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<div id="block1">
    <div class="text_1">  
<h1>Запорізька загальноосвітня школа №14</h1>

Загальноосвітня школа І-ІІІ ступенів №14 м. Запоріжжя була заснована в 1936 р., як залізнична неповна середня школа Нове приміщення школи введено в дію на початку 1980 - х років.
</div>
<div class="image_1">  
<img class="image_1" src="/image/school1.jpg"> 
</div>
</div>

   
 <?php   $this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'Критерії оцінювання'=>"Критерії оцінювання навчальних досягнень реалізуються в нормах оцінок, які встановлюють чітке співвідношення між вимогами до знань, умінь і навичок, які оцінюються, та показником оцінки в балах. Рівні оцінювання: <br/>
                                Початковий рівень - 1:<br/>
                                Учень (учениця) розрізняє об'єкти вивчення <br/>
                                Рівень - 2:<br/>
                                Учень (учениця) відтворює незначну частину навчального матеріалу, має нечіткі уявлення про об'єкт вивчення; <br/>
                                Рівень - 3:<br/>
                                Учень (учениця) відтворює частину навчального матеріалу; з допомогою вчителя виконує елементарні завдання; <br/>
                                Середній рівень - 4:<br/>
                                Учень (учениця) з допомогою вчителя відтворює основний навчальний матеріал, може повторити за зразком певну операцію, дію; <br/>
                                Рівень - 5:<br/>
                                Учень (учениця) відтворює основний навчальний матеріал, здатний з помилками й неточностями дати визначення понять, сформулювати правило; <br/>
                                Рівень - 6:<br/>
                                Учень (учениця) виявляє знання й розуміння основних положень навчального матеріалу. Відповідь його(її) правильна, але недостатньо осмислена. Вміє застосовувати знання при виконанні завдань за зразком; <br/>
                                Достатній рівень - 7:<br/>
                                Учень (учениця) правильно відтворює навчальний матеріал, знає основоположні теорії і факти, вміє наводити окремі власні приклади на підтвердження певних думок, частково контролює власні навчальні дії; <br/>
                                Рівень - 8:<br/>
                                Знання учня (учениці) є достатніми, він (вона) застосовує вивчений матеріал у стандартних ситуаціях, намагається аналізувати, встановлювати найсуттєвіші зв'язки і залежність між явищами, фактами, робити висновки, загалом контролює власну діяльність. Відповідь його (її) логічна, хоч і має неточності; <br/> 
                                Рівень - 9:<br/>
                                Учень (учениця) добре володіє вивченим матеріалом, застосовує знання в стандартних ситуаціях, уміє аналізувати й систематизувати інформацію, використовує загальновідомі докази із самостійною і правильною аргументацією; <br/>
                                Високий рівень - 10:<br/>
                                Учень (учениця) має повні, глибокі знання, здатний(а) використовувати їх у практичній діяльності, робити висновки, узагальнення; <br/>
                                Рівень - 11:<br/>
                                Учень (учениця) має гнучкі знання в межах вимог навчальних програм, аргументовано використовує їх у різних ситуаціях, уміє знаходити інформацію та аналізувати її, ставити і розв'язувати проблеми; <br/>
                                Рівень - 12:<br/>
                                Учень (учениця) має системні, міцні знання в обсязі та в межах вимог навчальних програм, усвідомлено використовує їх у стандартних та нестандартних ситуаціях. Уміє самостійно аналізувати, оцінювати, узагальнювати опанований матеріал, самостійно користуватися джерелами інформації, приймати рішення.  <br/>",
        
        'Правила внутрішнього розпорядку та поведінки для учнів'=>" 1. Загальні положення:<br/>
                                                                    1.1. Учні зараховуються до школи на підставі заяви батьків (1-9 класи) та особистої заяви (10-11 класи), а також при наданні необхідної документації (медична картка, особова справа, документи про освіту).<br/>
                                                                    1.2. Кожен учень навчається в школі відповідно до наказу по школі в закріпленому класі. Вільний перехід з класу в клас для навчання заборонений. <br/>
                                                                    1.3. Навчальні заняття починаються відповідно до розкладу, затвердженого директором школи. Кожен учень повинен приходити в школу за 15 хвилин до початку занять і вийти з будівлі школи протягом 15 хвилин після закінчення останнього уроку.<br/>
                                                                    1.4. До початку уроків і між ними учні повинні знаходитися в навчальних приміщеннях будівлі школи. Забороняється знаходження в навчальних кабінетах школи.<br/>
                                                                    1.5. Під час навчально-виховного процесу порядок в школі забезпечує черговий клас на чолі з черговим вчителем і черговим адміністратором. Виконання їх вимог обов’язкове для всіх учнів.<br/>
                                                                    2. Зовнішній вигляд:<br/>
                                                                    2.1. Демократичний підхід щодо зовнішнього вигляду учня пе­редбачає відсутність форми єди­ного зразка, але зовнішній вигляд є «візитною карткою» кожної лю­дини. У стінах школи ціна одягу учня не має значення. Учень НВК ТП повинен з'являтися в акуратному, діловому, строгому за стилем одя­зі, в якому зручно під час занять та на перервах. Одяг та аксесуари не повинні заважати іншим.<br/>
                                                                    2.2. Заборонено: носити штани «під рвані», блузи, що оголюють живіт та спину; прикраси; некоректно проявляти емоції; користуватися чужим спортивним одягом або взуттям, використову­вати спільний посуд під час їжі.<br/>
                                                                    2.3. Головний убір, сонцезахисні окуляри, рукавички тощо слід зняти при вході до при­міщення.<br/>
                                                                    2.4. Не дозволяється перебування у приміщенні школи у верхньому одязі.<br/>
                                                                    3. Користування електронними засобами:<br/>
                                                                    3.1.Учні не можуть користува­тися під час занять радіо, про­гравачами аудіокасет, компакт-дисків, пейджерами, мобільними телефонами, іншими електронни­ми засобами у приміщенні школи.<br/>
                                                                    3.2. Використані під час занять вка­зані предмети підлягають вилучен­ню на час навчального процесу. 3.3. Навчальний заклад не несе відповідальності за зникнення або псування особистих речей учнів. <br/>
                                                                    4. Навчання:<br/>
                                                                    4.1. Учні повинні приходити в школу з виконаним домашнім завданням, мати щоденник, підручники, зошити і інше учбове приладдя, згідно розкладу.<br/>
                                                                    Урок проходить під керівницт­вом учителя. Учень зобов'язаний виконувати його вимоги. Вчитель не повинен витрачати час уроку на дисциплінарні питання. Про учнів, які за­важають проходженню навчального процесу, вчитель повідомляє класного керівника або подає доповідну записку черговому адміністратору, які проводять профілактичну роботу, повідомляють про порушення батьків учнів.<br/>
                                                                    4.2.Учень, який з'явився в клас після дзвоника, зобов'яза­ний подати щоденник учителю для відповідної помітки. Учень, який запізнився, повинен звернути­ся до свого класного керівника (а на час його відсутності — до заступника директора ) та подати пояс­нювальну записку про причину запізнення.<br/>
                                                                    4.3. На уроці учні повинні дотримуватись дисципліни, бути уважними по відношенню до вчителя і однокласників, виходити до дошки з щоденником, дотримувати морально-правових і етичних норми в міжособистісному спілкуванні: коли входить учитель, встати й привітати його, після чого з дозволу сісти на своє робоче місце; якщо необхідно звернутися до вчителя, підняти руку; коли вчитель звертається до всіх учнів, вони мають припинити роботу й уважно вислухати зауваження, інструктаж; виходити з кабінету можна тільки після дзвінка і з дозволу вчителя; використовувати навчальний час для виконання завдання і не відволікатися розмовами,своєчасно й якісно виконувати доручену справу;<br/>
                                                                    5. Урок фізичної культури:<br/>
                                                                    5.1. Учні, звільнені від занять фі­зичної культури, обов'язково ма­ють подати медичну довідку ВКК відповідного зразка.<br/>
                                                                    5.2. Усі звільнені мають бути при­сутні в спортивній залі від почат­ку до кінця заняття, незважаючи на термін звільнення.<br/>
                                                                    5.3. Під час занять фізичною куль­турою обов'язково слід мати вста­новлену спортивну форму (спор­тивний костюм, шорти, футболку, взуття на м'якій основі).<br/>
                                                                    6. Щоденник учня:<br/>                                                                  
                                                                    6.1. Щоденник є офіційним доку­ментом учня. Учень зобов'язаний постійно мати при собі щоденник, по­давати його на першу вимогу ад­міністрації, класного керівника, вчителя – предметника; належним чином зберігати його та подавати батькам для підпису.<br/>
                                                                    7. Відсутність учня на занятті:<br/>
                                                                    7.1. Якщо учню необхідно бути від­сутнім під час занять, батьки по­винні особисто повідомити класного керівника або заздалегідь пода­ти заяву на ім'я директора.<br/>
                                                                    7.2. Про будь-яку незаплановану відсутність необхідно повідомити того ж дня, можна зателефонува­ти та пояснити її причину. За від­сутності учня протягом тижня ба­тьки особисто подають пояснюва­льну записку.<br/>
                                                                    7.3. Відсутність через хворобу має бути підтверджена медичною до­відкою не пізніше як за тиждень після повернення учня.<br/>
                                                                    7.4. Відсут­ність не звільняє від контролю знань. Учень, який пропустив заняття з поважної причини, зобов'язаний першим звернутися до вчителя, погодити з ним фо­рму відпрацювання, час виконан­ня контрольної роботи.<br/>
                                                                    8. Дотримання правил гігієни:<br/>
                                                                    8.1. Учні школи повинні дотримуватись правил особистої гігієни, слідкувати за чистотою класних кімнат, шкільного приміщення та подвір’я. Обов’язково здійснювати щоденне вологе прибирання та щотижневе генеральне прибирання класних кімнат.<br/>
                                                                    8.2. Учні повинні стежити за своїм зовнішнім виглядом. Волосся учнів повинно бути акуратно укладеним або підстриженим, обов'язково чистим. Одяг і взуття учнів повинні бути чистими, охайними, з урахуванням етичних і естетичних норм культури одягу для державних установ.<br/>
                                                                    8.3. На кожному поверсі школи розташовані питні фонтанчики. Пити воду потрібно акуратно, не відкривати кран сильно, не розбризкувати воду на підлогу. Заборонено використовувати питні фонтанчики для миття ганчірок, рук взуття і т.п.<br/>
                                                                    8.4. Приймати їжу можна тільки в приміщенні шкільної їдальні, заздалегідь помивши руки з милом.<br/>
                                                                    9. Вимоги безпеки під час навчально-виховного процесу:<br/>
                                                                    9.1. Щоб уникнути нещасних випадків і травмувань кожен учень повинен дотримуватись правил особистої безпеки, а саме:<br/>
                                                                    9.1.1.Не підходити і не чіпати незнайомі предмети і тварин;<br/>
                                                                    9.1.2.Не висовуватися з вікон шкільної будівлі;<br/>
                                                                    9.1.3.Не спілкуватися з незнайомими людьми, що викликають підозру;<br/>
                                                                    9.1.4.Не торкатися мокрими руками електричних приладів, дротів електроустановок, що знаходяться в будівлі школи і шкільному дворі;<br/>
                                                                    9.1.5.До і після початку занять, під час перерв не бігати по шкільній будівлі і шкільному двору.<br/>
                                                                    9.1.6.Під час уроків, лабораторних та практичних робіт виконувати лише ті завдання, які поставив учитель.<br/>
                                                                    9.2. Учням категорично заборонено приносити в школу легкозаймисті і вибухонебезпечні предмети, а також сірники і запальнички.<br/>
                                                                    9.3. При створенні конфліктної ситуації в час навчально-виховного процесу учням категорично забороняється самостійно її вирішувати. Такі ситуації необхідно вирішувати тільки із залученням вчителя, класного керівника або адміністрації школи.
                                                                    9.4. Учням забороняється без дозволу співробітників школи знаходитися поблизу встановленого устаткування, приладів і інших предметів, що представляють небезпеку для здоров'я і життя.
                                                                    9.5. Освітлення школи - електричне. Включати в мережу електронагрівальні та інші електроприлади і апарати дозволено тільки співробітникам школи за допомогою справних з'єднань. Самовільна експлуатація учнями електронагрівальних приладів і електроустаткування категорично заборонена.<br/>
                                                                    9.6. При виявленні несправності електропроводки або електроустаткування учні негайно повинні повідомити про це вчителя або будь-якого працівника школи.<br/>
                                                                    9.7. У випадку виникнення вогненебезпечної ситуації в будівлі школи або шкільному дворі, учні зобов'язані повідомити про це вчителя або будь-якого працівника школи. Самостійно ліквідовувати займання електропроводки категорично забороняється!<br/>
                                                                    9.8. Якщо учень став свідком нещасного випадку, що відбувся в будівлі школи або шкільному дворі з учнями або працівниками школи, він зобов'язаний надати посильну першу долікарську допомогу, оповістити про те, що трапилось будь-якого дорослого, що знаходиться в школі, взяти участь в розслідуванні нещасного випадку.<br/>
                                                                    10. Паління та вживання алкоголю:<br/>
                                                                    10.1. Заборонено палити й вживати слабоалкогольні та алкогольні напої у приміщенні та на території школи. <br/>",
        // panel 3 contains the content rendered by a partial view
      
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
));
?>
