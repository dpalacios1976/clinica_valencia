document.addEventListener('DOMContentLoaded', function() {
    
    for (let i = 0; i < 7; i++) {

        const hora_desde = document.querySelector('#hd'+i);
        const hora_hasta = document.querySelector('#hh'+i);
        const morning_from = document.querySelector('#mf'+i);
        const morning_to = document.querySelector('#mt'+i);
        const afternoon_from = document.querySelector('#af'+i);
        const afternoon_to = document.querySelector('#at'+i);
        
        hora_desde.addEventListener('change', (event) => {
            var id = event.target.value;
            if (id) 
            {
                morning_from.value = "";
                morning_from.setAttribute("readonly", true);
                morning_from.classList.add('schedule-select');
                morning_to.setAttribute("readonly", true);
                morning_to.value = "";
                morning_to.classList.add('schedule-select');
                afternoon_from.setAttribute("readonly", true);
                afternoon_from.value = "";
                afternoon_from.classList.add('schedule-select');
                afternoon_to.setAttribute("readonly", true);
                afternoon_to.value = "";
                afternoon_to.classList.add('schedule-select');
                // console.log(id);
            } else {
                morning_from.classList.remove('schedule-select');
                morning_from.removeAttribute("readonly");
                morning_to.removeAttribute("readonly");
                morning_to.classList.remove('schedule-select');
                afternoon_from.removeAttribute("readonly");
                afternoon_from.classList.remove('schedule-select');
                afternoon_to.removeAttribute("readonly");
                afternoon_to.classList.remove('schedule-select');
            }
        });

        morning_from.addEventListener('change', (event) => {
            var id = event.target.value;
            if (id) 
            {
                hora_desde.setAttribute("readonly", true);
                hora_desde.value = "";
                hora_desde.classList.add('schedule-select');
                hora_hasta.setAttribute("readonly", true);
                hora_hasta.value = "";
                hora_hasta.classList.add('schedule-select');
            } else {
                hora_desde.classList.remove('schedule-select');
                hora_desde.removeAttribute("readonly");
                hora_hasta.classList.remove('schedule-select');
                hora_hasta.removeAttribute("readonly");
            }
        });

        afternoon_from.addEventListener('change', (event) => {
            var id = event.target.value;
            if (id) 
            {
                hora_desde.setAttribute("readonly", true);
                hora_desde.value = "";
                hora_desde.classList.add('schedule-select');
                hora_hasta.setAttribute("readonly", true);
                hora_hasta.value = "";
                hora_hasta.classList.add('schedule-select');
            } else {
                hora_desde.classList.remove('schedule-select');
                hora_desde.removeAttribute("readonly");
                hora_hasta.classList.remove('schedule-select');
                hora_hasta.removeAttribute("readonly");
            }
        });
    }

});

function scheduleStore(id)
{
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const form = document.querySelector('#addSchedule');
    const form_data = new FormData(document.querySelector('#addSchedule'));

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        axios.post('/doctor/schedule/store/'+id, form_data)
            .then(function (response) {
                if (response.data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: response.data.message,
                    }).then(result => {
                        location.reload();
                    });
                } else {

                    if (response.data.hasOwnProperty("error")) 
                    {
                        Swal.fire({
                            icon: 'warning',
                            title: response.data.message,
                            text: response.data.error
                        })

                    } else {

                        const article = document.createElement('article');
                        const list = document.createElement('ul');

                        list.setAttribute(
                            'style',
                            'list-style-type: none;',
                        );

                        const a_errors = response.data.errors;

                        for (const element in a_errors) {
                            if (a_errors.hasOwnProperty(element)) 
                            {    
                                const item = document.createElement('li');
                                item.setAttribute(
                                    'style',
                                    'padding-bottom: 5px;',
                                );
                                
                                item.textContent = a_errors[element];
                                list.appendChild(item);
                            }
                        }

                        Swal.fire(
                            response.data.message,
                            article.appendChild(list),
                            'warning'
                        )
                    }
                }
            })
            .catch(function (error) {
                Swal.fire({
                    icon: 'error',
                    title: error.data.message,
                    text: error.data.error
                })
            });
    });
}