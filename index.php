<?

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

function getFullnameFromParts($Surname, $first_name,$last_name){
    return $Surname.' '.$first_name.' '.$last_name;
}
$fullName = getFullnameFromParts('Иванов', 'Иван','Иваныч');
echo $fullName;
echo '<br>';

function getPartsFromFullname($fullName){
    $arrayName = explode(" ", $fullName);
    $surname = $arrayName[0];
    $name = $arrayName[1];
    $patronomyc = $arrayName[2];
    $arrayName = ['surname'=>$surname,'name'=>$name,'patronomyc'=>$patronomyc];
    return $arrayName;
}
print_r(getPartsFromFullname($fullName));

function getShortName ($fullName) {
    $arrName = getPartsFromFullname($fullName);

    return $arrName['name'];
}

echo getShortName($fullName);
echo '<br>';
