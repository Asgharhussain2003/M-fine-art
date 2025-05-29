@extends('layouts.User.mainuser')

@section('title', 'ServiceCollection')

@section('content')
    @include('layouts.User.navbar')


<style>
    body {
        background: linear-gradient(to bottom right,rgb(72, 71, 71), #0f0f0f);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #ffd700;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    form {
        max-width: 850px;
        margin: 80px auto;
        padding: 50px;
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        border-radius: 50px;
        border: 2px solid #ffd700;
        box-shadow:
            0 0 25px rgba(255, 217, 0, 0.95),
            0 0 60px rgba(255, 217, 0, 0.98),
            inset 0 0 20px rgba(255, 217, 0, 0.82);
        transition: transform 0.4s ease-in-out;
    }

    form:hover {
        transform: translateY(-5px);
    }

    label {
        font-weight: 700;
        font-size: 13px;
        color: #ffd700;
        text-transform: uppercase;
        margin-bottom: 6px;
        display: block;
        letter-spacing: 0.7px;
    }

    .form-control,
    .form-select {
        background: #1e1e1e;
        border: 2px solid #ffd700;
        color: #fff;
        padding: 14px 18px;
        border-radius: 12px;
        margin-bottom: 22px;
        font-size: 15px;
        box-shadow:
            0 0 8px rgba(255, 217, 0, 0.59),
            inset 0 0 6px rgba(255, 217, 0, 0.34);
        transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #ffee00;
        background: #000;
        color: #ffd700;
        box-shadow:
            0 0 15px rgba(255, 223, 0, 0.7),
            inset 0 0 10px rgba(255, 223, 0, 0.2);
        outline: none;
        transform: scale(1.01);
    }

    .btn-primary {
        background: linear-gradient(145deg, #ffd700, #ffc400);
        border: none;
        padding: 14px 35px;
        border-radius: 40px;
        font-weight: bold;
        color: #101010;
        font-size: 16px;
        text-transform: uppercase;
        box-shadow:
            0 0 25px rgba(255, 215, 0, 0.5),
            0 0 40px rgba(255, 215, 0, 0.3);
        transition: all 0.4s ease;
        letter-spacing: 1.2px;
        cursor: pointer;
    }

    .btn-primary:hover {
        transform: scale(1.07);
        background: linear-gradient(145deg, #fff700, #ffd500);
        box-shadow:
            0 0 45px rgba(255, 223, 0, 0.9),
            0 0 80px rgba(255, 223, 0, 0.6);
    }

    .alert-success {
        max-width: 850px;
        margin: 30px auto;
        padding: 22px 30px;
        background: linear-gradient(145deg, #09231d, #0b1f1a);
        color: #00ffc3;
        border-left: 6px solid #00ffc3;
        border-radius: 14px;
        font-weight: bold;
        font-size: 16px;
        box-shadow: 0 0 25px #00ffc3;
        animation: successGlow 1.5s infinite alternate ease-in-out;
        text-align: center;
        letter-spacing: 0.5px;
    }

    @keyframes successGlow {
        0% {
            box-shadow: 0 0 15px #00ffc3;
        }
        100% {
            box-shadow: 0 0 35px #00ffc3;
        }
    }

    @media (max-width: 768px) {
        form {
            padding: 30px;
            margin: 40px 15px;
            border-radius: 30px;
        }

        .btn-primary {
            width: 100%;
            padding: 14px 0;
        }
    }

    /* Additional enhancement */
    ::placeholder {
        color: #bbb;
        opacity: 0.8;
    }

    input::selection,
    textarea::selection {
        background: #ffd700;
        color: #000;
    }

    .form-group {
        position: relative;
        margin-bottom: 25px;
    }

    /* Glowing Heading */
    h6.text-center {
        font-weight: 700;
        font-size: 3rem;
        color: #ffd700;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 50px;
        letter-spacing: 2px;
        position: relative;
        text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b, 0 0 30px #ffcc00;
        animation: glowPulse 3s infinite ease-in-out;
    }

    @keyframes glowPulse {
        0%, 100% {
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b;
        }
        50% {
            text-shadow: 0 0 20px #ffcc00, 0 0 40px #fff176;
        }
    }

    h6.text-center::after {
        content: '';
        width: 140px;
        height: 4px;
        background: linear-gradient(90deg, #ffc107, #ffeb3b, #ffc107);
        background-size: 200% 100%;
        animation: shineLine 4s linear infinite;
        display: block;
        margin: 15px auto 0;
        border-radius: 2px;
    }

    @keyframes shineLine {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }
</style>
<br>

    <h6 class="text-center mb-4">Add your Details here</h6>

<form action="{{ route('service-collection.store') }}" method="POST">
    @csrf


    <!-- First Name -->
<div class="mb-3">
    
  <label for="first_name" class="form-label" style="color: #ffd700;">👤 First Name</label>
  </div><input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control" required>


<!-- Last Name -->
<div class="mb-3">
  <label for="last_name" class="form-label" style="color: #ffd700;">👥 Last Name</label>
  <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control" required>
</div>

<!-- Expected Month of Painting -->
<div class="mb-3">
  <label for="expected_date" class="form-label" style="color: #ffd700;">📅 Expected Month of Painting</label>
  <input type="month" name="expected_date" id="expected_date" class="form-control"
          required>
</div>

<style>
  select.form-control option {
    background-color: black;
    color: #ffd700;
  }
  /* Hover effect on options (limited support) */
  select.form-control option:hover {
    background-color: #333300;
    color: #fff;
  }
</style>

<div class="mb-3">
  <label for="house_size" class="form-label" style="color: #ffd700; font-weight: bold; font-size: 1.1rem;">
    🏠 Select House Size
  </label>
  <select name="house_size" id="house_size" class="form-control" required>
    <option value="" disabled selected>🏡 Choose your house type</option>
    <option value="Small">🏘️ Small</option>
    <option value="Medium">🏠 Medium</option>
    <option value="Large">🏡 Large</option>
    <option value="Duplex">🏯 Duplex</option>
    <option value="Villa">🏰 Villa</option>
    <option value="Penthouse">🌇 Penthouse</option>
    <option value="Studio">🎬 Studio</option>
    <option value="Bungalow">🌴 Bungalow</option>
    <option value="Cottage">🏚️ Cottage</option>
    <option value="Townhouse">🏢 Townhouse</option>
    <option value="Mansion">🏛️ Mansion</option>
    <option value="Cabin">🏕️ Cabin</option>
  </select>
</div>


<!-- Preferred Time -->
<div class="mb-3">
    <label for="time" class="form-label">⏰ Preferred Time</label>
    <input type="time" name="time" id="time" class="form-control" required>
</div>

<!-- Email -->
<div class="mb-3">
    <label for="email" class="form-label">📧 Email Address</label>
    <input type="email" name="email" id="email" placeholder="you@example.com" class="form-control" required>
</div>

<!-- Phone -->
<div class="mb-3">
    <label for="phone" class="form-label">📱 Phone Number</label>
    <input type="text" name="phone" id="phone" placeholder="+92-XXX-XXXXXXX" class="form-control" required>
</div>

<!-- City -->
<div class="mb-3">
    <label for="city" class="form-label">🌆 City</label>
    <input type="text" name="city" id="city" placeholder="e.g. Lahore" class="form-control" required>
</div>

<!-- Amount -->
<div class="mb-3">
    <label for="amount" class="form-label">💰 Amount</label>
    <input type="text" name="amount" id="amount" placeholder="e.g. 5000 PKR" class="form-control" required>
</div>



<div class="mb-3">
    <label for="paint_type" class="form-label">Paint Type</label>
  <select name="paint_type" id="paint_type" class="form-select" required style=" color:rgb(138, 135, 135);">
    <option value="" disabled selected style="color: #999;">🎨 Select Paint Type</option>
    <option value="Oil-Based" style="background-color: black; color: #ffd700;">🛢 Oil-Based</option>
    <option value="Water-Based" style="background-color: black; color: #ffd700;">💧 Water-Based</option>
    <option value="Latex" style="background-color: black; color: #ffd700;">🧴 Latex</option>
    <option value="Matte" style="background-color: black; color: #ffd700;">🖤 Matte</option>
    <option value="Glossy" style="background-color: black; color: #ffd700;">✨ Glossy</option>
    <option value="Enamel" style="background-color: black; color: #ffd700;">🏺 Enamel</option>
    <option value="Satin" style="background-color: black; color: #ffd700;">🧵 Satin</option>
    <option value="Textured" style="background-color: black; color: #ffd700;">🌾 Textured</option>
    <option value="Eggshell" style="background-color: black; color: #ffd700;">🥚 Eggshell</option>
    <option value="Flat" style="background-color: black; color: #ffd700;">🟫 Flat</option>
    <option value="Chalk" style="background-color: black; color: #ffd700;">🪵 Chalk</option>
    <option value="Metallic" style="background-color: black; color: #ffd700;">⚙️ Metallic</option>
    <option value="Primer" style="background-color: black; color: #ffd700;">🧪 Primer</option>
    <option value="Anti-Mold" style="background-color: black; color: #ffd700;">🦠 Anti-Mold</option>
    <option value="Anti-Rust" style="background-color: black; color: #ffd700;">🛡️ Anti-Rust</option>
    <option value="Varnish" style="background-color: black; color: #ffd700;">🌟 Varnish</option>
    <option value="Polyurethane" style="background-color: black; color: #ffd700;">🔰 Polyurethane</option>
    <option value="Acrylic" style="background-color: black; color: #ffd700;">🎨 Acrylic</option>
    <option value="Chalkboard" style="background-color: black; color: #ffd700;">🖍️ Chalkboard</option>
    <option value="Milk Paint" style="background-color: black; color: #ffd700;">🥛 Milk Paint</option>
    <option value="Spray Paint" style="background-color: black; color: #ffd700;">💨 Spray Paint</option>
    <option value="Anti-Corrosive" style="background-color: black; color: #ffd700;">⚡ Anti-Corrosive</option>
    <option value="Fire-Resistant" style="background-color: black; color: #ffd700;">🔥 Fire-Resistant</option>
    <option value="UV-Resistant" style="background-color: black; color: #ffd700;">☀️ UV-Resistant</option>
    <option value="Heat-Resistant" style="background-color: black; color: #ffd700;">♨️ Heat-Resistant</option>
  </select>
</div>
   <div class="text-center">
  <button type="submit" class="btn btn-primary" style="border-radius: 30px;">Submit</button>
</div>

</form>
@if(session('success'))
    <style>
        #toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .toast {
            background: linear-gradient(135deg, #4caf50, #388e3c);
            color: #fff;
            padding: 15px 25px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: default;
            user-select: none;
            opacity: 1;
            transform: translateX(100%);
            animation: slideIn 0.5s forwards, pulseGlow 2s ease-in-out infinite, fadeOut 0.5s 119.5s forwards;
            max-width: 320px;

            box-shadow:
                0 0 8px #4caf50,
                0 0 15px #4caf50,
                0 0 20px #4caf50,
                0 0 30px #76ff03;
        }

        @keyframes slideIn {
            to {
                transform: translateX(0);
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                box-shadow:
                    0 0 8px #4caf50,
                    0 0 15px #4caf50,
                    0 0 20px #4caf50,
                    0 0 30px #76ff03;
            }
            50% {
                box-shadow:
                    0 0 12px #81c784,
                    0 0 25px #81c784,
                    0 0 30px #b9f6ca,
                    0 0 40px #b9f6ca;
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateX(100%);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let container = document.getElementById('toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'toast-container';
                document.body.appendChild(container);
            }

            let toast = document.createElement('div');
            toast.className = 'toast';
            toast.textContent = "{{ session('success') }}";

            container.appendChild(toast);

            // Remove toast after 2 minutes (120000 milliseconds)
            setTimeout(() => {
                toast.remove();
            }, 120000);
        });
    </script>
@endif



@section('content')
    @include('layouts.User.footer')
    @endsection 

    