const langKh = ()=>{
    localStorage.setItem('langKh',false);
    localStorage.removeItem('langEn',false);
}
const langEn = ()=>{
    localStorage.setItem('langEn',false);
    localStorage.removeItem('langKh',false);
}
const load = ()=>{
    let localeKh;
    if (localStorage.getItem('langKh')==false) {
        localeKh == true
    } else {
        localeKh=localStorage.getItem('langKh')
    }
    if (localeKh) {
        document.getElementById('dropdown').classList.remove('hidden')
        document.getElementById('dropdown').classList.add('inline-flex')
        document.getElementById('dropdown').classList.remove('inline-flex')
        document.getElementById('dropdown').classList.add('hidden')
    } else {
        document.getElementById('dropdown').classList.remove()
    }
}