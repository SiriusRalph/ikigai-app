<!DOCTYPE html>
<html>
<head>
<title>Ikizen - Paiement Stripe</title>
<link rel="icon" type="image/png" sizes="32x32" href="/dashboard/assets/img/favicon.png">
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
<style>

img {
    width: 40%;
    height: 100%;
    object-fit: fill;
}
.text-muted {
    font-size: 10px;
}
p{
    margin: 0;
}

.textmuted {
    color: #fe5525;
    font-size: 13px;
}
.fs-14 {
    font-size: 14px;
}
.btn.btn-primary {
    width: 100%;
    height: 55px;
    border-radius: 0;
    padding: 13px 0;
    background-color: #1350b4;
    border: none;
    font-weight: 600;
}
.btn.btn-primary:hover .fas {
    transform: translateX(10px);
    transition: transform 0.5s ease
}
</style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <a href="{{route ('consultations.index')}}"><i class="fas fa-arrow-left"></i></a>
            <h2 class="text-center ">Page de paiement</h2>
        </div>
        
        <div class="row mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <div class="col-lg-6 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5 text-center">
                        <img class="rounded-circle" src="{{ asset('storage/' . $expert->photo) }}"
                            alt="{{$expert->nom}}">
                    </div>
                    <div class="row bg-light mx-auto text-center">
                        <div class="col-md-6 col-6 ps-30 pe-0 my-4">
                            <p class="text-muted">Name</p>
                            <p class="h5">{{ $expert->nom }}</p>
                        </div>
                        <div class="col-md-6 col-6  ps-30 my-4">
                            <p class="text-muted">Category</p>
                            <p class="h5 m-0">{{ $expert->categorie }}</p>
                        </div>
                        <div class="col-md-6 col-6 ps-30 my-4">
                            <p class="text-muted">Price</p>
                            <p class="h5 m-0">{{ $expert->tarif }}<span class="ps-1"> DHS/30min</span></p>
                        </div>
                        <div class="col-md-6 col-6 ps-30 my-4">
                            <p class="text-muted">Experience</p>
                            <p class="h5 m-0">{{ $expert->experience }}<span class="ps-1"> years</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <div class="d-flex align-items-end mt-4 mb-4">
                            <p class="h4 m-0"><span class="pe-1">{{ $expert->nom }}</span></p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Date</p>
                            <p class="fs-14 fw-bold">{{ $consultation->date_consultation }} </p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Time</p>
                            <p class="fs-14 fw-bold">{{ $consultation->heure_debut }}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Duration</p>
                            <p class="fs-14 fw-bold">{{ $consultation->duree }} min</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="h4">{{ $consultation->montant }} DHS</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 px-0">
                        <form action="{{ route('stripe.post') }}" method="post" id="payment-form">
                            @csrf
                            <input type="hidden" name="consultation_id" value="{{ $consultation->id }}">

                            <div class="row bg-light m-0">
                                <div class="col-12 px-4 my-4">
                                    <p class="h5">Payment details</p>
                                </div>
                                <div class="col-12 px-4 mb-4">
                                    <div id="card-element"></div>
                                    <div id="card-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-12  mb-4 p-0">
                                    <button type="submit" class="btn btn-primary">Purchase {{ $consultation->montant }} DHS <span class="fas fa-arrow-right ps-2"></span></button>
                                </div> 
                            </div>
                        </form>
                    </div>



                </div>
            </div>
            
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', {style: style});
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>
</body>
</html>
