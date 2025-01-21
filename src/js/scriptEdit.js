const boutonEditer = document.getElementById('btn-enregistrer');
const inputs = document.querySelectorAll('input');

let data;
data['nom'] = document.getElementById('nom').value;
data['email'] = document.getElementById('email').value;
data['tel'] = document.getElementById('tel').value;
data['adresse'] = document.getElementById('adresse').value;
data['code_postal'] = document.getElementById('code_postal').value;
data['ville'] = document.getElementById('ville').value;
boutonEditer.addEventListener('click', (event) => {
    event.preventDefault();

    if (boutonEditer.innerText === "Editer") {
        inputs.forEach(input => input.disabled = false);
        boutonEditer.innerText = "Valider";
    }
    else{

        inputs.forEach(input => {
            data[input.id] = input.value;
        });
        fetch('modifierClient.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(donneesUpdate)
        })
            .then(response => response.json())
            .then(data => location.reload());

        inputs.forEach(input => input.disabled = true);
        boutonEditer.innerText = "Editer";
    }
});