function jourtravaille(dateArg) {
    let date = new Date(`${dateArg}T00:00:00`);
    
    const holidays = [[01, 01], [04, 13], [05, 01], [05, 08], [05, 21], [06, 01], [07, 14], [08, 15], [11, 01], [12, 25]];
    const days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    const months = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'novembre', 'octobre', 'novembre', 'decembre'];

    for (let i of holidays) {
        let dateToCompare = new Date(`2020-${i[0]}-${i[1]}`);        
        
        if (Date.parse(dateToCompare) === Date.parse(date)) {
            console.log(`Le ${days[date.getDay()]} ${date.getDate()} ${months[date.getMonth()]} 2020 est un jour ferié`);
            break;
        } else if (Date.parse(dateToCompare) !== Date.parse(date) && (date.getDay() == 0 || date.getDay() == 6)) {
            console.log(`Non, ${days[date.getDay()]} ${date.getDate()} ${months[date.getMonth()]} 2020 est un week-end`);
            break;
        } else {
            console.log(`Oui, le ${days[date.getDay()]} ${date.getDate()} ${months[date.getMonth()]} 2020 est un jour travaillé`);
            break;
        }
    }    
}

jourtravaille('2020-01-01');
jourtravaille('2020-02-04');
jourtravaille('2020-04-11');