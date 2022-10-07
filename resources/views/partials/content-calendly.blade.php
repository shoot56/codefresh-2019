@php
$email             = isset( $_GET['email'] ) ? $_GET['email'] : 'Unknown';
$name              = isset( $_GET['fname'] ) ? $_GET['fname'] : 'Unknown';
$surname           = isset( $_GET['surname'] ) ? $_GET['surname'] : 'Unknown';
$company           = isset( $_GET['company'] ) ? $_GET['company'] : 'Unknown';
$calendly          = isset( $_GET['calendly'] ) ? $_GET['calendly'] : 'Unknown';
$scheduler         = isset( $_GET['scheduled-by'] ) ? $_GET['scheduled-by'] : 'Unknown';
$calendly_url      = '';
$calendly_data_url = '';

switch ( $calendly ) {
    case 'Oriel Belzer':
        $calendly_url = 'https://calendly.com/oriel-brandon';
        break;
    case 'Rob Chappell':
        $calendly_url = 'https://calendly.com/codefresh-west-team/60-minutes';
        break;
    case 'Einat Hirsch':
        $calendly_url = 'https://calendly.com/codefresh-demo-row/einat';
        break;
    case 'Maya Mandelbaum':
        $calendly_url = 'https://calendly.com/maya8/30min';
        break;
    default:
        $calendly_url = 'https://calendly.com/codefresh-worldwide-sales/demo';
        break;
}

$calendly_data_url = add_query_arg( array(
    'email'      => $email,
    'a1'         => $company,
    'a2'         => $scheduler,
    'first_name' => $name,
    'last_name'  => $surname,
    'full_name'  => $name . ' ' . $surname,
    ), $calendly_url );
@endphp

<div>
    <div class="w-full text-center">
        {{-- Calendly inline widget begin --}}
        <div class="calendly-inline-widget main-calendly" style="height: 100vh !important; min-height: unset !important; overflow-y: auto !important;" data-url="{{ esc_url( $calendly_data_url ) }}">
            <div class="cf-calendly py-4 text-center">
                <img src="@asset( 'images/logo.svg' )" alt="Codefresh" class="mx-auto">
            </div>
        </div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
        {{-- Calendly inline widget end --}}
    </div>
</div>
