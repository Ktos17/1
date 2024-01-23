const home = document.querySelector('.joisdf-sdafmno3-sdfno3');

home.addEventListener('click',() => {
    home.style.color = '#fff';
    setTimeout(() => {
        home.style.color = '#bdc5ca';
    }, 300)
});

const guides = document.querySelector('.naisd-3niaosd-3niawsd-3nioasd');

guides.addEventListener('click', () => {
    guides.style.color = '#fff';
    setTimeout(() => {
        guides.style.color = '#bdc5ca';
    }, 300);
});

const pricing = document.querySelector('.nioadsf-3nasd-3nas-dn3iasd');

pricing.addEventListener('click', () => {
    pricing.style.color = '#fff';
    setTimeout(() => {
        pricing.style.color = '#bdc5ca';
    }, 300);
});

const img = document.getElementById('bjxcv-2nbasd-nasd');


const theme = document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd');

let counter = 1;

theme.addEventListener('click', () => {
    counter ++;
    console.log(counter);

    if (counter === 2) {
        document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.display = 'block';
        counter = 0;
    } else {
        document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.display = 'none';
        counter = 1;
    }
});

const langButton = document.querySelector('.niasd-2niasbndufg-qniasd-0sdfgin');
const langDiv = document.querySelector('.naisd-2nisa-sdn2af');
let number = 1;
langButton.addEventListener('click', () => {
    number++;
    if (number === 2) {
        langDiv.style.visibility = 'visible';
        number = 0;
    } else {
        langDiv.style.visibility = 'hidden';
        number = 1;
    }
});


const lightMode = document.querySelector('.niasd02nisa02-asbud2-asbdu');
const container = document.querySelector('.container');
const sidebar = document.querySelector('.a');
const firstDivTop = document.querySelector('.joisdf-sdafmno3-sdfno3');
const secondDivTop = document.querySelector('.naisd-3niaosd-3niawsd-3nioasd');
const thirdDivTop = document.querySelector('.nioadsf-3nasd-3nas-dn3iasd');
const input = document.querySelector('.nbiaosd-xcvkjaw-3nidsf-3nisdf');
const search = document.querySelector('.bnxcv-32jzx-asd20asdiasd-nhoiafs');
const htmlIntroduction = document.querySelector('.maods-sdfni2-anisdas');
const setup = document.querySelector('.naisd2-niasd-2niasdf03niasdf');
const osdfnksdbnzcxbmbxcmni = document.querySelector('.maosd-2mniasd-2niasd');
const bnzxcmbzxcmnbzmnxcbzmnx = document.querySelector('.naisd-2niadsf-2niasf02niasd');
const nbmxcbvmzbcbnzxcbmn = document.querySelector('.naisd-2niasf-2niafs0ni2q3d');


function lightmode () {
    // COOKIE
    document.cookie = "mode=light; path=/";

    container.style.backgroundColor = '#fff';
    container.style.color = '#000';
    console.log('light mode');
    sidebar.style.backgroundColor = '#fff';
    sidebar.style.color = '#000';
    document.querySelector('.top').style.borderBottom = '2px solid #000';
    firstDivTop.style.color = '#000';
    secondDivTop.style.color = '#000';
    thirdDivTop.style.color = '#000';
    darkMode.style.color = '#fff';
    document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.border = '1px solid #000';
    input.style.border = '1px solid #000';
    search.style.color = '#000';
    document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd').style.color = '#000';
    htmlIntroduction.style.color = '#000';
    document.querySelector('.znxic2-zxnciqwsadnidfas').style.color = '#000';
    setup.style.color = '#000';
    osdfnksdbnzcxbmbxcmni.style.color = '#000';
    bnzxcmbzxcmnbzmnxcbzmnx.style.color = '#000';
    nbmxcbvmzbcbnzxcbmn.style.color = '#000';
    nnsdfjospdjfspodjf.style.color = '#000';
    bvjasdoahsiodajsiodhjas.style.color = '#000';
    document.querySelector('.niasd-2niasbndufg-qniasd-0sdfgin').style.color = '#000';
    document.querySelector('.a').style.backgroundColor = '#fff';
};

lightMode.addEventListener('click', () => {
    lightmode();
}); 

const darkMode = document.querySelector('.nasd-2niasd-2uasd');
const nnsdfjospdjfspodjf = document.querySelector('.aoisdj2-niasd');
const bvjasdoahsiodajsiodhjas = document.querySelector('.mniaosd-2niasd-2niasd-2');

function darkmode () {
    // COOKIE
    document.cookie = "mode=dark; path=/";

    container.style.backgroundColor = '#19181f';
    document.querySelector('.znxic2-zxnciqwsadnidfas').style.color = '#fff';
    sidebar.style.backgroundColor = '#1919f';
    sidebar.style.color = '#fff';
    document.querySelector('.a').style.backgroundColor = '#19181f';
    firstDivTop.style.color = '#bdc5ca';
    secondDivTop.style.color = '#bdc5ca';
    thirdDivTop.style.color = '#bdc5ca';
    input.style.border = '1px solid #fff';
    search.style.color = '#fff';
    document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.border = '1px solid #fff';
    document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd').style.color = '#fff';
    htmlIntroduction.style.color = '#fff';
    setup.style.color = '#fff';
    osdfnksdbnzcxbmbxcmni.style.color = '#fff';
    bnzxcmbzxcmnbzmnxcbzmnx.style.color = '#fff';
    nbmxcbvmzbcbnzxcbmn.style.color = '#fff';
    nnsdfjospdjfspodjf.style.color = '#fff';
    bvjasdoahsiodajsiodhjas.style.color = '#fff';
    document.querySelector('.niasd-2niasbndufg-qniasd-0sdfgin').style.color = '#fff';
    document.querySelector('.a').style.backgroundColor = '#1918f';
    document.querySelector('.niasd-2niasdf-sdfina-sdnaisdnbashdiaojsfg-sndgiosjndg').style.backgroundColor = '#fff';
    document.querySelector('.asdin2-and').style.color = '#000';
    document.querySelector('.niasd-2niasdf-sdfina-sdnaisdnbashdiaojsfg-sndgiosjndg').style.backgroundColor = '#19181f';
    document.querySelector('.asdin2-and').style.color = '#fff';
};

darkMode.addEventListener('click', () => {
    darkmode();
});

function searchFunction() {
    var searchInput = document.querySelector('.nbiaosd-xcvkjaw-3nidsf-3nisdf').value.toLowerCase();
    var paragraphs = document.getElementsByTagName('.aodjsoj21-asjdoas-12jisad-2joasd');

    var searchResults = document.querySelector('.niasd-2nisdf-3niasd-2niasd');
    searchResults.innerHTML = '';

    for (var i = 0; i < paragraphs.length; i++) {
        var paragraphText = paragraphs[i].textContent.toLowerCase();

        if (paragraphText.includes(searchInput)) {
            var resultItem = document.createElement('p');
            resultItem.textContent = paragraphs[i].textContent;
            searchResults.appendChild(resultItem);
        }
    }
}

const searchBtn = document.querySelector('.bnxcv-32jzx-asd20asdiasd-nhoiafs');

searchBtn.addEventListener('click', () => {
    searchFunction();
});

const link = document.querySelector('.link');

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.znxic2-zxnciqwsadnidfas').style.color = '#fff';
    document.querySelector('.a').style.width = '0px';
    document.querySelector('.sidebar').style.width = '0px';
    document.querySelector('.a').style.backgroundColor = '#19181f';
    const errorPageHomeButton = document.querySelector('.mnasd-2niasd-2niasd0');
    errorPageHomeButton.style.transition = 'all 0.3s ease-in-out';
    document.querySelector('.a').style.backgroundColor = '#fff';

    errorPageHomeButton.addEventListener('click', () => {
    errorPageHomeButton.style.backgroundColor = '#fff';
    errorPageHomeButton.style.color = '#000';
    setTimeout(() => {
        errorPageHomeButton.style.backgroundColor = '#000';
        errorPageHomeButton.style.color = '#fff';
    }, 300)
});
});

const setupBtn = document.querySelector('.naisd2-niasd-2niasdf03niasdf');

setupBtn.addEventListener('click', () => {
    window.location.href = 'index.php?page=html introduction';
    window.scrollTo(0, 100);
}); 

const third = document.querySelector('.naisd-2niadsf-2niasf02niasd');
const fourth = document.querySelector('.naisd-2niasf-2niafs0ni2q3d');
const fifth = document.querySelector('.niasd-2niasd-2niasdfnqioasd');
const sixth = document.querySelector('.asdin2-niodsf-qniasdn2asd');
const seventh = document.querySelector('.niasd-2nisdf-2niasdf-2niasd');
const eighth = document.querySelector('.niasd-2niosdf-2noiasd-2niasd');
const ninth = document.querySelector('.asdin20nsdf-2niasdni20asdfn');
const tenth = document.querySelector('.niasd-2niasd-2niasd-2niasd');
const eleventh = document.querySelector('.andio2-nasd2nias-ni212oasd');
const twelfth = document.querySelector('.sdinf23-nsidf-23nisdf');
const thirteenth = document.querySelector('.andi2-niaods-2nioasd');
const y = document.querySelector('.nizs-2noasdiqowep-zxnisdfnasd');
const x = document.querySelector('.nisdf-2niasiuiqowe-bnjxzfc-asdias');
const iuqwenbujd = document.querySelector('.niasd-2nasdnisdfns0opiwernbjzcx-vnowsdfalsd');
const iouqwebnjxzfnsidf = document.querySelector('.nsdfo0sdfni2-anids-a2nisdanisdfas');
const nsd2nsdfnioqwonasd = document.querySelector('.niasd-2niasd-ioquowebjzxc0qsnidas');
const fiuqwbnudfosdjp = document.querySelector('.niasd-2niasiuoqenjzx-qnildk');

let zxnciqowaspdo = 1;

document.addEventListener('keydown', (event) => {
    zxnciqowaspdo++;
    if (event.key === 'g' && zxnciqowaspdo === 2) {
        console.log('display: block;');
        document.querySelector('.a').style.width = '300px';
        document.querySelector('.page').style.paddingLeft = '300px';
        document.querySelector('.sidebar').style.width = '300px';
        document.querySelector('.maods-sdfni2-anisdas').style.width = '0px;';
        document.querySelector('.naisd2-niasd-2niasdf03niasdf').classList.remove('moveLeftAnimation');
        document.querySelector('.naisd2-niasd-2niasdf03niasdf').classList.add('moveRightAnimation');
        document.querySelector('.maosd-2mniasd-2niasd').classList.remove('moveLeftAnimation');
        document.querySelector('.maosd-2mniasd-2niasd').classList.add('moveRightAnimation');
        document.querySelector('.maosd-2mniasd-2niasd').style.color = '#fff';
        document.querySelector('.naisd2-niasd-2niasdf03niasdf').style.color = '#fff';
        document.querySelector('.maods-sdfni2-anisdas').style.color = '#fff';
        document.querySelector('.nsdfo0sdfni2-anids-a2nisdanisdfas').style.transition = 'all 0.3s ease-in-out';
        document.querySelector('.nsdfo0sdfni2-anids-a2nisdanisdfas').style.left = '800px';
        y.style.transition = 'all 0.3s ease-in-out';
        y.style.left = '1310px';
        x.style.transition = 'all 0.3s ease-in-out';
        x.style.left = '800px';
        iuqwenbujd.style.transition = 'all 0.3s ease-in-out';
        iuqwenbujd.style.left = '800px';
        iouqwebnjxzfnsidf.style.transition = 'all 0.3s ease-in-out';
        iouqwebnjxzfnsidf.style.left = '900px';
        nsd2nsdfnioqwonasd.style.transition = 'all 0.3s ease-in-out';
        nsd2nsdfnioqwonasd.style.left = '1210px';
        fiuqwbnudfosdjp.style.transition = 'all 0.3s ease-in-out';
        fiuqwbnudfosdjp.style.left = '1310px';
        third.style.color = '#fff';
        fourth.style.color = '#fff';
        fifth.style.color = '#fff';
        sixth.style.color = '#fff';
        seventh.style.color = '#fff';
        eighth.style.color = '#fff';
        ninth.style.color = '#fff';
        tenth.style.color = '#fff';
        eleventh.style.color = '#fff';
        twelfth.style.color = '#fff';
        thirteenth.style.color = '#fff';
        third.classList.remove('moveLeftAnimation');
        third.classList.add('moveRightAnimation');
        fourth.classList.remove('moveLeftAnimation');
        fourth.classList.add('moveRightAnimation');
        fifth.classList.remove('moveLeftAnimation');
        fifth.classList.add('moveRightAnimation');
        sixth.classList.remove('moveLeftAnimation');
        sixth.classList.add('moveRightAnimation');
        seventh.classList.remove('moveLeftAnimation');
        seventh.classList.add('moveRightAnimation');
        eighth.classList.remove('moveLeftAnimation');
        eighth.classList.add('moveRightAnimation');
        ninth.classList.remove('moveLeftAnimation');
        ninth.classList.add('moveRightAnimation');
        tenth.classList.remove('moveLeftAnimation');
        tenth.classList.add('moveRightAnimation');
        eleventh.classList.remove('moveLeftAnimation');
        eleventh.classList.add('moveRightAnimation');
        twelfth.classList.remove('moveLeftAnimation');
        twelfth.classList.add('moveRightAnimation');
        thirteenth.classList.remove('moveLeftAnimation');
        thirteenth.classList.add('moveRightAnimation');
        document.querySelector('.ands-2nidfs-wnaisd').style.transition = 'all 0.3s ease-in-out';
        document.querySelector('.ands-2nidfs-wnaisd').style.paddingLeft = '300px';
        zxnciqowaspdo = 0;
    } else {
        document.querySelector('.a').style.width = '0px';
        document.querySelector('.sidebar').style.width = '0px';
        document.querySelector('.naisd2-niasd-2niasdf03niasdf').classList.remove('moveRightAnimation');
        document.querySelector('.naisd2-niasd-2niasdf03niasdf').classList.add('moveLeftAnimation');
        document.querySelector('.maosd-2mniasd-2niasd').classList.remove('moveRightAnimation');
        document.querySelector('.maosd-2mniasd-2niasd').classList.add('moveLeftAnimation');
        document.querySelector('.nsdfo0sdfni2-anids-a2nisdanisdfas').style.left = '800px';
        y.style.left = '1210px';
        x.style.left = '700px';
        iuqwenbujd.style.left = '700px';
        fiuqwbnudfosdjp.style.left = '1210px';
        iouqwebnjxzfnsidf.style.left = '800px';
        nsd2nsdfnioqwonasd.style.left = '1110px';
        third.classList.remove('moveRightAnimation');
        third.classList.add('moveLeftAnimation');
        fourth.classList.remove('moveRightAnimation');
        fourth.classList.add('moveLeftAnimation');
        fifth.classList.remove('moveRightAnimation');
        fifth.classList.add('moveLeftAnimation');
        sixth.classList.remove('moveRightAnimation');
        sixth.classList.add('moveLeftAnimation');
        seventh.classList.remove('moveRightAnimation');
        seventh.classList.add('moveLeftAnimation');
        eighth.classList.remove('moveRightAnimation');
        eighth.classList.add('moveLeftAnimation');
        ninth.classList.remove('moveRightAnimation');
        ninth.classList.add('moveLeftAnimation');
        tenth.classList.remove('moveRightAnimation');
        tenth.classList.add('moveLeftAnimation');
        twelfth.classList.remove('moveRightAnimation');
        twelfth.classList.add('moveLeftAnimation');
        eleventh.classList.remove('moveRightAnimation');
        eleventh.classList.add('moveLeftAnimation');
        thirteenth.classList.remove('moveRightAnimation');
        thirteenth.classList.add('moveLeftAnimation');
        document.querySelector('.ands-2nidfs-wnaisd').style.paddingLeft = '0px';
        zxnciqowaspdo = 1;
    }
});

const htmlDiv = document.querySelector('.mosdhfjisdf-2niasd02bnasd02iuasda');
const cssDiv = document.querySelector('.naisd-2niasfd-2niasd');
const jsDiv = document.querySelector('.niasd-2niasf-n2iasdnsdf');






window.addEventListener('scroll', () => {
    if (window.scrollY > 3950) {
        document.querySelector('.nxciv-3nisadfsdfin-snfisdf').classList.add('nxciv-3nisadfsdfin-snfisdf-animation-class');
    }
});



emailjs.init("qzRiudGtrAyNWreaS");

const sendBtn = document.querySelector('.niasd-2niasd-nisdf-2niasd');

sendBtn.addEventListener('click', () => {
    sendBtn.innerHTML = 'Sending...';
    const subject = 'New message from customer!';
    const email = document.querySelector('.niasd-nisdf-2niasd-nisdfoasd').value;
    const message = document.querySelector('.niasd-2niasdf-niasdopafsd').value;
    const name = document.querySelector('.mnsdf-2oas-nsiodfosdf').value;

    emailjs.send("service_13dtlmy", "template_4acs649", {
      temat: subject,
      name: name,
      message: message,
      email: email,
    }).then(function() {
        sendBtn.innerHTML = 'Email has been sent!';
    }, function (error) {
        result.innerHTML = 'Email sending failed!';
        console.log(error);
    }
    )
});

document.addEventListener('scroll', () => {
    if (window.scrollY > 600) {
        document.querySelector('.nisadoasd-2nioajsdasnbdas').style.height = '150px';
        document.querySelector('.asdmni2-asd9wunbkdsabfnsdkf').style.height = '270px';
        document.querySelector('.sdfmnie-19we0siabnfiusdfnoisdf').style.height = '351px';
    } 
});

document.addEventListener('scroll', () => {
    if (window.scrollY > 1060) {
        document.querySelector('.uasduyqwbudf-sdnfioasbduasd').classList.add('uasduyqwbudf-sdnfioasbduasd-animation-class');
    }
});

document.addEventListener('scroll',  () => {
    if (window.scrollY > 1600) {
        document.querySelector('.iuqwebasd-2nias-dniaofsinnsdf').classList.add('iuqwebasd-2nias-dniaofsinnsdf-animation-class');
    }
});

document.addEventListener('scroll', () => {
    if (window.scrollY > 4315) {
        document.querySelector('.naisd-2niasd-2nias').style.transition = 'all 1.4s ease-in-out';
        document.querySelector('.naisd-2niasd-2nias').style.height = '700px';
    }
})

const exampleJs = document.getElementById('exampleJsBtn');
const exampleJsWindow = document.getElementById('exampleJsWindow');
const goToLoginPageExample = document.getElementById('goToLoginPageExample');

exampleJs.addEventListener('click', () => {
    exampleJsWindow.style.paddingTop = '100px';
    exampleJsWindow.style.maxHeight = '164px';
    goToLoginPageExample.style.visibility = 'visible';
    exampleJsWindow.innerHTML = 'Thank you for joining us!';
});

const closeReviewWindowButton = document.querySelector('.iuwere-ni-dfnisdfqni-sdnfsdf');
const reviewWindow = document.querySelector('.asdinas-dn2i-afnisdfh');

closeReviewWindowButton.addEventListener('click', () => {
    reviewWindow.style.display = 'none';
});


const addReviewButton = document.querySelector('.nisdf-2niasd-9o1onsdf-snidf');

addReviewButton.addEventListener('click', () => {
    reviewWindow.style.display = 'none';
});

const openReviewWindowBtn = document.querySelector('.iuqwebjzxdc-wniasdfsdbuwasd-asfisdbfnc');

openReviewWindowBtn.addEventListener('click', () => {
    reviewWindow.style.display = 'block';
})

const HtmlEdytorTekstuButton = document.querySelector('.nusdufnisd-2oiansdoifsd');

const test1FirstQuestion = document.getElementById('test#1FirstQuestion');

let test1Wynik = 0;

test1FirstQuestion.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        if (test1FirstQuestion.value === '</p>') {
            document.querySelector('.jiqwenidf-2nidsf-oijiosdf').style.backgroundColor = 'green';
            test1Wynik++;
        } else {
            document.querySelector('.jiqwenidf-2nidsf-oijiosdf').style.backgroundColor = 'red';
            document.querySelector('.nisdf-2niodsf-2noisdjfo').value = null;
        }
    }
});

const test1SecondQuestion = document.getElementById('test#1SecondQuestion');

test1SecondQuestion.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        if (test1SecondQuestion.value === '!DOCTYPE') {
            document.querySelector('.usdf-nsidf-2oidjfosdfjoi').style.backgroundColor = 'green';
        } else {
            document.querySelector('.usdf-nsidf-2oidjfosdfjoi').style.backgroundColor = 'red';
            test1SecondQuestion.value = null;
        }
    }
});

const test1ThirdQuestion = document.getElementById('test#1ThirdQuestion');
const test1FourthQuestion = document.getElementById('test#1FourthQuestion');
const test1FifthQuestion = document.getElementById('test#1FifthQuestion');
const test1SixthQuestion = document.getElementById('test#1SixthQuestion');
const test1SeventhQuestion = document.getElementById('test#1SeventhQuestion');
const test1EighthQuestion = document.getElementById('test#1EighthQuestion');

test1EighthQuestion.addEventListener('keydown', (event) => {
    if (event.key === "Enter") {
        if (test1ThirdQuestion.value === '<ul>' && test1FourthQuestion.value === '<li>' && test1FifthQuestion.value === '</li>' && test1SixthQuestion.value === '<li>' && test1SeventhQuestion.value === '</li>' && test1EighthQuestion.value === '<u') {
            document.querySelector('.iuqwedf-2nsdf-2osdjfiosdf').style.backgroundColor = 'green';
        } else {
            document.querySelector('.iuqwedf-2nsdf-2osdjfiosdf').style.backgroundColor = 'red';
            test1ThirdQuestion.value = null;
            test1FourthQuestion.value = null;
            test1FifthQuestion.value = null;
            test1SixthQuestion.value = null;
            test1SeventhQuestion.value = null;
            test1EighthQuestion.value = null;
        }
    }
});

const test1NinthQuestion = document.getElementById('test#1NinthQuestion');
const test1TenthQuestion = document.getElementById('test#1TenthQuestion');
const test1EleventhQuestion = document.getElementById('test#1EleventhQuestion');
const test1EleventhQuestion2 = document.querySelector('.sodfkpo2-sdnfi2-sdfnsdf-2oisdjfoi');
const test1TwelvthQuestion = document.getElementById('test#1TwelvthQuestion');
const test1ThirteenthQuestion = document.getElementById('test#1ThirteenthQuestion');



test1ThirteenthQuestion.addEventListener('keydown', (event) => {

    if (event.key === 'Enter') {
        const values = {
            ninth: test1NinthQuestion.value.trim(),
            tenth: test1TenthQuestion.value.trim(),
            eleventh: test1EleventhQuestion.value.trim(),
            eleventh2: test1EleventhQuestion2.value.trim(),
            twelvth: test1TwelvthQuestion.value.trim(),
            thirteenth: test1ThirteenthQuestion.value.trim()
        };


        const isCorrect =
            values.ninth.includes('<html>') &&
            values.tenth.includes('<body>') &&
            values.eleventh.includes('<p>') &&
            values.eleventh2.includes('</p>') &&
            values.twelvth.includes('</body>') &&
            values.thirteenth.includes('</html>');


        if (isCorrect) {
            document.querySelector('.isdfjoi-2nidf-2jijodf').style.backgroundColor = 'green';
        } else {
            document.querySelector('.isdfjoi-2nidf-2jijodf').style.backgroundColor = 'red';
            test1NinthQuestion.value = null;
            test1TenthQuestion.value = null;
            test1EleventhQuestion.value = null;
            test1EleventhQuestion2.value = null;
            test1TwelvthQuestion.value = null;
            document.querySelector('.sodfkpo2-sdnfi2-sdfnsdf-2oisdjfoi').value = null;
            test1ThirteenthQuestion.value = null;
        }
    }
});

const headExercise1 = document.getElementById('headExercise1');
const headExercise2 = document.getElementById('headExercise2');
const headExercise3 = document.getElementById('headExercise3');
const headExercise4 = document.getElementById('headExercise4');
const headExercise5 = document.getElementById('headExercise5');
const headExercise6 = document.getElementById('headExercise6');
const headExercise7 = document.getElementById('headExercise7');
const headExercise8 = document.getElementById('headExercise8');
const headExercise9 = document.getElementById('headExercise9');

headExercise9.addEventListener('keydown', (event) => {

    if (event.key === 'Enter') {
        const values = {
            Exerciseninth: headExercise1.value.trim(),
            Exercisetenth: headExercise2.value.trim(),
            Exerciseeleventh: headExercise3.value.trim(),
            Exerciseeleventh2: headExercise4.value.trim(),
            Exercisetwelvth: headExercise5.value.trim(),
            Exercisethirteenth: headExercise6.value.trim(),
            Exercise14: headExercise7.value.trim(),
            Exercise15: headExercise8.value.trim(),
            Exercise16: headExercise9.value.trim()
        };


        const isCorrect =
            values.Exerciseninth.includes('<html>') &&
            values.Exercisetenth.includes('<body>') &&
            values.Exerciseeleventh.includes('rel="stylesheet" href=') &&
            values.Exerciseeleventh2.includes('head>') &&
            values.Exercisetwelvth.includes('class') &&
            values.Exercisethirteenth.includes('</p>') &&
            values.Exercise14.includes('</div>') &&
            values.Exercise15.includes('src') &&
            values.Exercise16.includes('</script>')

        if (isCorrect) {
            document.querySelector('.iuqenlksf-291p230nmiofs-dfspdfjp').style.backgroundColor = 'green';
        } else {
            document.querySelector('.iuqenlksf-291p230nmiofs-dfspdfjp').style.backgroundColor = 'red';
            headExercise1.value = null;
            headExercise2.value = null;
            headExercise3.value = null;
            headExercise4.value = null;
            headExercise5.value = null;
            document.querySelector('.sodfkpo2-sdnfi2-sdfnsdf-2oisdjfoi').value = null;
            headExercise6.value = null;
            headExercise7.value = null;
            headExercise8.value = null;
            headExercise9.value = null;
        }
    }
});

const tableExericse1 = document.getElementById('tableExercise1');
const tableExercise2 = document.getElementById('tableExercise2');

tableExercise2.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        if (tableExericse1.value === '<table>' && tableExercise2.value === '</table>') {
            document.querySelector('.oiqweniosdf-2oiqd-sdoifsjdif').style.backgroundColor = 'green';
        } else {
            document.querySelector('.oiqweniosdf-2oiqd-sdoifsjdif').style.backgroundColor = 'red';
        }
    }
});

const tableExercise3 = document.getElementById('tableExercise3');
const tableExercise4 = document.getElementById('tableExercise4');
const tableExercise5 = document.getElementById('tableExercise5');
const tableExercise6 = document.getElementById('tableExercise6');

tableExercise6.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        if (tableExercise3.value === '<table>' && tableExercise4.value === '<tr class="kolumna-1-klasa" id="kolumna-1-id">' && tableExercise5.value === '</tr>' && tableExercise6.value === '</table>') {
            document.querySelector('.oqweiuodf-iqwe-sdjfisjdifo').style.backgroundColor = 'green';
        } else {
            document.querySelector('.oqweiuodf-iqwe-sdjfisjdifo').style.backgroundColor = 'red';
        }
    }
});

const responsiveDesignTrueButton = document.getElementById('responsiveDesignTrueButton');
const responsiveDesignFalseButton = document.getElementById('responsiveDesignFalseButton');
let BSUIDiodfFJdsfJIDf = 0;

responsiveDesignTrueButton.addEventListener('click', () => {
    responsiveDesignTrueButton.style.backgroundColor = '#5CA388';
    responsiveDesignFalseButton.style.backgroundColor = '#12231d';
    BSUIDiodfFJdsfJIDf++;
    if (BSUIDiodfFJdsfJIDf > 1) {
        responsiveDesignTrueButton.style.backgroundColor = '#12231d';
        BSUIDiodfFJdsfJIDf = 0;
    }
});

let QUWOSDFnisdfaj90SJs98S = 0;

responsiveDesignFalseButton.addEventListener('click', () => {
    responsiveDesignFalseButton.style.backgroundColor = '#5ca388';
    responsiveDesignTrueButton.style.backgroundColor = '#12231d';
    QUWOSDFnisdfaj90SJs98S++;
    if (QUWOSDFnisdfaj90SJs98S > 1) {
        responsiveDesignFalseButton.style.backgroundColor = '#12231d';
        QUWOSDFnisdfaj90SJs98S = 0;
    }
});

const startTestBtn = document.querySelector('.iqwensdf-noqw-sdfiosdf-1299sd-fnsodf');

startTestBtn.addEventListener('click', () => {
    setTimeout(() => {
        console.log("czas minal");
        document.querySelector('.opiqe0ds-129IOSDF0-NIDFjsFDS398DfsfoisdfS9f0s').style.display = 'none';
    }, 200)
});

const test1Exercise1Input1 = document.getElementById('test1Exercise1Input1');
const test1Exercise1Input2 = document.getElementById('test1Exercise1Input2');
const test1Exericse1Input3 = document.getElementById('test1Exercise1Input3');
const test1Exercise1Input4 = document.getElementById('test1Exercise1Input3_1');
const test1Exercise1Input5 = document.getElementById('test1Exercise1Input3_2');
const test1Exercise1Input6 = document.getElementById('test1Exercise1Input4');
const test1Exercise1Input7 = document.getElementById('test1Exercise1Input5');
const test1Exercise1Input8 = document.getElementById('test1Exercise1Input6');
const test1Exercise1Input9 = document.getElementById('test1Exercise1Input7');
const test1Exercise1Input10 = document.getElementById('test1Exercise1Input8');
const test1Exercise1Input11 = document.getElementById('test1Exercise1Input9');
const test1Exercise1Input12 = document.getElementById('Test1Exercise1Input10');
const test1Exercise1Input13 = document.getElementById('test1Exercise1Input13');
let wynikTest1 = 0;

test1Exercise1Input13.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        console.log('event.key');
        if (test1Exercise1Input1.value === '<!DOCTYPE html>' &&
            test1Exercise1Input2.value === '</title>' &&
            test1Exericse1Input3.value === '</head>' &&
            test1Exercise1Input4.value === '<cite>' &&
            test1Exercise1Input5.value === '</cite>' &&
            test1Exercise1Input6.value === '<p>' &&
            test1Exercise1Input7.value === '<mark>' &&
            test1Exercise1Input8.value === '</mark>' &&
            test1Exercise1Input9.value === '</p>' &&
            test1Exercise1Input10.value === '<del>' &&
            test1Exercise1Input11.value === '</del>' &&
            test1Exercise1Input12.value === '<adress>' &&
            test1Exercise1Input13.value === '</adress>'
        ) {
            document.querySelector('.iuqwensdf-sdnfiosdf-2jodfniosdf').style.backgroundColor = 'green';
            wynikTest1 = 3;
        } else {
            document.querySelector('.iuqwensdf-sdnfiosdf-2jodfniosdf').style.backgroundColor = 'red';
        }
    }
});

const test1Exercise2Input1 = document.getElementById('test1Exercise2Input1');
const test1Exercise2Input2 = document.getElementById('test1Exercise2Input2');
const test1Exercise2Input3 = document.getElementById('test1Exercise2Input3');
const test1Exercise2Input4 = document.getElementById('test1Exercise2Input4');
const test1Exercise2Input5 = document.getElementById('test1Exercise2Input5');

test1Exercise2Input5.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        if (test1Exercise2Input1.value === '<a href=' &&
            test1Exercise2Input2.value === '</a>' &&
            test1Exercise2Input3.value === 'src=' &&
            test1Exercise2Input4.value === '<ul>' &&
            test1Exercise2Input5.value === '</ul>'
        ) {
            document.querySelector('.SNIDF-EWNFOWE-FS9PGS0-IRGDFSG').style.backgroundColor = 'green';
            if (wynikTest1 === 3) {
                wynikTest1 = 6;
            } else {
                wynikTest1 = 3;
            }
            wynikTest1++;
        } else {
            document.querySelector('.SNIDF-EWNFOWE-FS9PGS0-IRGDFSG').style.backgroundColor = 'red';
        }
    }
});

const test1Exercise4Button1 = document.getElementById('test1Exercise4Button1');
const test1Exercise4Button2 = document.getElementById('test1Exercise4Button2')
const test1Exercise4Button3 = document.getElementById('test1Exercise4Button3');
const test1Exercise4Button4 = document.getElementById('test1Exercise4Button4');

let exercise4Answer = 0;

test1Exercise4Button1.addEventListener('click', () => {
    if (!exercise4Answer) {
        test1Exercise4Button1.style.backgroundColor = 'red';
        exercise4Answer++;
    }
});

test1Exercise4Button2.addEventListener('click', () => {
    if (!exercise4Answer) {
        test1Exercise4Button2.style.backgroundColor = 'red';
        exercise4Answer++;
    }
});

test1Exercise4Button3.addEventListener('click', () => {
    if (!exercise4Answer) {
        test1Exercise4Button3.style.backgroundColor = 'green';
        exercise4Answer++;
        wynikTest1++;
    }
});

test1Exercise4Button4.addEventListener('click', () => {
    if (!exercise4Answer) {
        test1Exercise4Button4.style.backgroundColor = 'red';
        exercise4Answer++;
    }
});

const test1Exercise5Button1 = document.getElementById('test1Exercise5Button1');
const test1Exercise5Button2 = document.getElementById('test1Exercise5Button2');
const test1Exercise5Button3 = document.getElementById('test1Exercise5Button3');
const test1Exercise5Button4 = document.getElementById('test1Exercise5Button4');
let exercise5Answer = 0;

test1Exercise5Button1.addEventListener('click', () => {
    if (!exercise5Answer) {
        test1Exercise5Button1.style.backgroundColor = 'red';
        exercise5Answer++;
    }
});

test1Exercise5Button2.addEventListener('click', () => {
    if (!exercise5Answer) {
        test1Exercise5Button2.style.backgroundColor = 'red';
        exercise5Answer++;
    }
});

test1Exercise5Button3.addEventListener('click', () => {
    if (!exercise5Answer) {
        test1Exercise5Button3.style.backgroundColor = 'red';
        exercise5Answer++;
    }
});

test1Exercise5Button4.addEventListener('click', () => {
    if (!exercise5Answer) {
        test1Exercise5Button4.style.backgroundColor = 'green';
        exercise5Answer++;
        wynikTest1++;
    }
});

const test1Exercise6Input1 = document.getElementById('test1Exercise6Button1');
const test1Exercise6Input2 = document.getElementById('test1Exercise6Button2');
let exercise6Answer = 0;

test1Exercise6Input1.addEventListener('click', () => {
    if (!exercise6Answer) {
        test1Exercise6Input1.style.backgroundColor = 'red';
        exercise6Answer++;
    }
});

const test1Exercise7Input1 = document.getElementById('test1Exercise7Input1');
const test1Exercise7Input2 = document.getElementById('test1Exercise7Input2');
const test1Exercise7Input3 = document.getElementById('test1Exercise7Input3');
const test1Exercise7Input4 = document.getElementById('test1Exercise7Input4');
let test1Exercise7Answer = 0;

test1Exercise7Input1.addEventListener('click', () => {
    if (!test1Exercise7Answer) {
        test1Exercise7Input1.style.backgroundColor = 'green';
        test1Exercise7Answer++;
        wynikTest1++;
    }
});

test1Exercise7Input2.addEventListener('click', () => {
    if (!test1Exercise7Answer) {
        test1Exercise7Input2.style.backgroundColor = 'red';
        test1Exercise7Answer++;
    }
});

test1Exercise7Input3.addEventListener('click', () => {
    if (!test1Exercise7Answer) {
        test1Exercise7Input3.style.backgroundColor = 'red';
        test1Exercise7Answer++;
    }
});

test1Exercise7Input4.addEventListener('click', () => {
    if (!test1Exercise7Answer) {
        test1Exercise7Input4.style.backgroundColor = 'red';
        test1Exercise7Answer++;
    }
});

test1Exercise6Input2.addEventListener('click', () => {
    if (!exercise6Answer) {
        test1Exercise6Input2.style.backgroundColor = 'green';
        exercise6Answer++;
        wynikTest1++;
    }
});

const test1Exercise8Input1 = document.getElementById('test1Exercise8Input1');
const test1Exercise8Input2 = document.getElementById('test1Exercise8Input2');
const test1Exercise8Input3 = document.getElementById('test1Exercise8Input3');
const test1Exercise8Input4 = document.getElementById('test1Exercise8Input4');
let exercise8Answer = 0;

test1Exercise8Input1.addEventListener('click', () => {
    if (!exercise8Answer) {
        test1Exercise8Input1.style.backgroundColor = 'red';
        exercise8Answer++;
    }
});

test1Exercise8Input2.addEventListener('click', () => {
    if (!exercise8Answer) {
        test1Exercise8Input2.style.backgroundColor = 'green';
        exercise8Answer++;
        wynikTest1++;
    }
});

test1Exercise8Input3.addEventListener('click', () => {
    if (!exercise8Answer) {
        test1Exercise8Input3.style.backgroundColor = 'red';
        exercise8Answer++;
    }
});

test1Exercise8Input4.addEventListener('click', () => {
    if (!exercise8Answer) {
        test1Exercise8Input4.style.backgroundColor = 'red';
        exercise8Answer++;
    }
});

const test1ResultButton = document.getElementById('test1ResultButton');
let wyniktest1p = document.getElementById('wyniktest1p');

test1ResultButton.addEventListener('click', () => {
    console.log(wynikTest1);
    wyniktest1p.innerHTML = 'Twój wynik to: ${wynikTest1}';
});


let responsive = '';


responsiveDesignFalseButton.addEventListener('click', () => {
    responsive = 'False - Not Responsive';
    console.log(responsive);
})

responsiveDesignTrueButton.addEventListener('click', () => {
    responsive = 'True - Responsive';
    console.log(responsive);
})

let websiteTypeInput = document.getElementById('websiteTypeInput');


websiteTypeInput.addEventListener('change', () => {  
    const responsiveDesignTrueBtn = document.getElementById('responsiveDesignTrueButton').value;
    const responsiveDesignFalseBtn = document.getElementById('responsiveDesignFalseButton').value;
    const websiteTypeBlog = document.getElementById('websiteTypeBlog').value;
    const websiteTypePortfolio = document.getElementById('websiteTypePortfolio').value;
    const websiteTypeShop = document.getElementById('websiteTypeShop').value;
    const websiteTypePersonalUse = document.getElementById('websiteTypePersonalUse').value;
    const websiteTypeOther = document.getElementById('websiteTypeOther').value;

    let selectedIndex = websiteTypeInput.selectedIndex;
    let selectedOption = websiteTypeInput.options[selectedIndex];

        let websiteType = selectedOption.value;
    console.log(websiteType);
});

const sendWebsiteDescriptionButton = document.getElementById('sendWebsiteDescription');

document.getElementById('sendWebsiteDescription').addEventListener('click', (websiteType) => {
    const numberOfPagesInput = document.getElementById('numberOfPagesInput').value;
    const websiteDescription = document.getElementById('WEBSITE-DESCRIBE').value;
    const emailInput = document.getElementById('emailInput').value;
    console.log(emailInput);
    console.log(websiteDescription);
    console.log(numberOfPagesInput);
    console.log(responsive.innerHTML);
    sendWebsiteDescriptionButton.innerHTML = 'Sending...';
    emailjs.send("service_9rrxlsf", "template_4acs649", {  
        email: emailInput,
        message: websiteDescription,
        temat: 'New question about website price!',
        pages: numberOfPagesInput,
        responsive: responsive,
        website_type: websiteType.value,
        website: websiteDescription,
}).then(function() {
    sendBtn.innerHTML = 'Email has been sent!';
}), function (error) {
    sendBtn.innerHTML = 'Email sending failed!';
    console.log(errror);
}
}) 

const scrollToTopButton = document.getElementById('scrollToTopButton');

scrollToTopButton.addEventListener('click', () => {
    scrollToTop(1000); 
});

function scrollToTop(duration) {
    const start = window.scrollY;
    const target = 0;
    const distance = target - start;
    let startTime = null;

    function animation(currentTime) {
        if (!startTime) startTime = currentTime;
        const progress = currentTime - startTime;
        window.scrollTo(0, easeInOutCubic(progress, start, distance, duration));

        if (progress < duration) {
            requestAnimationFrame(animation);
        }
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    }

    requestAnimationFrame(animation);
}
