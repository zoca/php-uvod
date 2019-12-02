<?php

/**
 * Funkcija koja vraca listu svih vesti
 * 
 * @return array Niz asocijativnih vesti
 * 
 */
function newsFetchAll()
{
    return [
        [
            'id' => 59602,
            'title' => 'DOBRO JUTRO: Ne preskačite doručak!',
            'description' => 'Nutricionisti su se davno složili da je jutarnji obrok od ključnog značaja za zdravlje, koncentraciju i učenje, bez obzira na godine',
            'category' => 'Magazin',
            'time_published' => '2019-05-23 18:03:42',
            'image' => 'https://picsum.photos/id/602/1024/680',
            'thumb' => 'https://picsum.photos/id/602/450/300',
            'comments' => 0,
        ],
        [
            'id' => 59603,
            'title' => 'TRSTENIK: Uvedena pasivna dežurstva',
            'description' => 'Štab za vanredne situacije Opštine Trstenik od danas je u statusu pasivnog dežurstva, odlučeno je na sednici tog staba koji je preduzeo i sve operativne i preventivne mere na zaštiti i spasavnju, a u pripravnosti su i sve komunalne službe i javna preduzeća',
            'category' => 'Srbija',
            'time_published' => '2019-05-26 10:45:19',
            'image' => 'https://picsum.photos/id/603/1024/680',
            'thumb' => 'https://picsum.photos/id/603/450/300',
            'comments' => 0,
        ],
        [
            'id' => 59600,
            'title' => 'TUNIS: Vojska likvidirala 21 teroristu u obračunu na granici sa Libijom',
            'description' => 'Tuniske vlasti saopštile su danas da je u sukobima policije i islamista u blizini granice sa Libijom poginulo ukupno 26 ljudi',
            'category' => 'Politika',
            'time_published' => '2019-05-01 16:49:16',
            'image' => 'https://picsum.photos/id/600/1024/680',
            'thumb' => 'https://picsum.photos/id/600/450/300',
            'comments' => 0,
        ],
        [
            'id' => 59599,
            'title' => '(VIDEO) GREOTA DA SE JEDE: Sitan vez na kolačiću!',
            'description' => 'Za neke bačeno vreme, za druge umetnost - ova dama ne štedi truda na napravi kolačiće kao iz bajke! Samo još da zovemo Ivicu i Maricu da ih degustiraju...',
            'category' => 'Magazin',
            'time_published' => '2019-05-01 10:19:13',
            'image' => 'https://picsum.photos/id/599/1024/680',
            'thumb' => 'https://picsum.photos/id/599/450/300',
            'comments' => 15,
        ],
        [
            'id' => 59598,
            'title' => 'MAHMUTOVIĆ: Spasavamo ljude iz poplava!',
            'description' => 'Gradonačelnik Novog Pazara Meho Mahmutović rekao je za Informer da je počela evakuacija stanovništva iz poplavljenih naselja',
            'category' => 'Politika',
            'time_published' => '2019-05-16 12:21:22',
            'comments' => 0,
        ],
        [
            'id' => 59597,
            'title' => 'MARKEC SE LEČI U LIVERPULU Klop mu poručio: Dođi na pripreme i pokaži se!',
            'description' => 'Srpski reprezentativac Lazar Marković poslednjih nekoliko dana proveo je u Liverpulu, gde je bio na kontrolama kod klupskih doktora, iako je ove sezone na pozajmici u turskom Fenerbahčeu',
            'category' => 'Sport',
            'time_published' => '2019-05-24 22:29:51',
            'image' => '',
            'thumb' => '',
            'comments' => 0,
        ],
        [
            'id' => 59532,
            'title' => '(FOTO) ALARMANTNA SITUACIJA! Poplave u Čačku, Požegi, Arilju i Lučanima - evakuisano 420 ljudi!',
            'description' => 'U Čačku je jutros proglašena vanredna situacija, zbog obilnih padavina koje su uzrokovale poplave u nekoliko mesto u tom gradu i okolini, a najkritičnije je u selima duž reke Čemernice. U opštinama Arilje i Lučani proglašena je vanredna situcija jer su se izlile reke Moravica i Bjelica, pa je pod vodom većina saobraćajnica, domaćinstava, fabrika, škola...',
            'category' => 'Srbija',
            'time_published' => '2019-05-31 09:03:48',
            'image' => 'https://picsum.photos/id/532/1024/680',
            'thumb' => 'https://picsum.photos/id/532/450/300',
            'comments' => 3,
        ],
        [
            'id' => 59596,
            'title' => 'POPLAVE: Vanredno i u Bajinoj Bašti!',
            'description' => 'Krizni štab za vanredne situacije Bajina Bašta proglasio je vanrednu situaciju na teritoriji cele opštine imajući u vidu da se očekuje još veći porast vode',
            'subcategory' => 'Srbija',
            'time_published' => '2019-05-28 04:11:12',
            'image' => 'https://picsum.photos/id/596/1024/680',
            'thumb' => 'https://picsum.photos/id/596/450/300',
            'comments' => 0,
        ],
        [
            'id' => 59593,
            'title' => 'NIJE ŠALA: Kako da pobedite insomniju!',
            'description' => 'Ukoliko imate probleme sa spavanjem, imaćete probleme i sa zdravljem, pa bi nesanicu trebalo shvatiti veoma ozbiljno',
            'category' => 'Magazin',
            'time_published' => '2019-05-29 15:38:52',
            'image' => 'https://picsum.photos/id/593/1024/680',
            'thumb' => 'https://picsum.photos/id/593/450/300',
            'comments' => 0,
        ],
    ];
}

/**
 * 
 * @param int $id ID vesti koju zelite da dobijete
 * @return array asocijativni niz koji predstavlja jednu vest
 */
function newsFetchOneById($id){
    foreach (newsFetchAll() as $news) {
        if($news['id'] == $id){
            return $news;
        }
    }

    return null;
}