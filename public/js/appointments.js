document.addEventListener('DOMContentLoaded', function() {
    const espcialidades = document.querySelector('#speciality');
    var doctor = document.querySelector('#doctor');

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: { 
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },

        
        locale: "es",
        dateClick:function(info) {
            var agendaModal = new bootstrap.Modal(document.getElementById('agendaModal'), {
                keyboard: false
            });
            agendaModal.show();

        }
        
    });
    calendar.render();

    espcialidades.addEventListener('change', (event) => {
        var options = document.querySelectorAll('#doctor option');
        options.forEach(o => o.remove());

        var id = event.target.value;
        var data = {id:id};

        axios.post('schedules/doctors/'+id, data)
            .then(function (response) {
                if (response.data.success) {

                    const doctors = response.data.data;
                    doctor.removeAttribute("readonly");

                    for (let x of doctors) {
                        const option = document.createElement('option');
                        option.text = x.names;
                        option.value = x.id;
                        doctor.appendChild(option);
                    }
                } else {

                    if (response.data.hasOwnProperty("error")) 
                    {
                        Swal.fire({
                            icon: 'warning',
                            title: response.data.message,
                            text: response.data.error
                        })
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

});