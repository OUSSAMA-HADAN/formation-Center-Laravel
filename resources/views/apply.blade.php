<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');


        .merriweather-light {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: normal;
        }

        .merriweather-regular {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .merriweather-bold {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: normal;
        }

        .merriweather-black {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: normal;
        }

        .merriweather-light-italic {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: italic;
        }

        .merriweather-regular-italic {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: italic;
        }

        .merriweather-bold-italic {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: italic;
        }

        .merriweather-black-italic {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-gray-100">
   

   
    <header class="bg-emerald-500 text-white p-3 rounded-lg shadow-lg mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold merriweather-bold">Formulaire de Demande</h1>
            <p class="mt-2 merriweather-regular">Veuillez remplir le formulaire ci-dessous pour postuler.</p>
        </div>
        <div>
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-20">
        </div>
    </header>

    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ route('apply') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <div>
                    <label class="block text-gray-700">Pénom</label>
                    <input type="text" name="first_name" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">Nom</label>
                    <input type="text" name="last_name" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">date de naissance</label>
                    <input type="date" name="birth_date" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">lieu de naissance</label>
                    <input type="text" name="birth_place" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">CIN(numero de catre national)</label>
                    <input type="text" name="id_card_number" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">Numero de telephone</label>
                    <input type="text" name="phone_number" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">statut marial</label>
                    <select name="marital_status" class="w-full p-2 border border-gray-300 rounded" required>
                        <option value="single">celibataire</option>
                        <option value="married">Marié</option>
                        <option value="divorced">Divorcé</option>
                        <option value="widowed">Veuf</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">années d'Experience</label>
                    <input type="number" name="years_of_experience" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div>
                    <label class="block text-gray-700">Niveau Educationel</label>
                    <input type="text" name="education_level" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                
            </div>
    
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 mt-4 rounded hover:bg-blue-700">
                Envoyer
            </button>
        </form>
    </div>
    
    
</body>

</html>