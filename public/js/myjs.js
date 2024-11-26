function formatDate(date) {
    date= new Date(date);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Les mois commencent à 0
    const year = date.getFullYear();

    return `${day}-${month}-${year}`;
}