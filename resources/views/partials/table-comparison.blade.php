@php
$vs              = $vs ?? '';
$vs_logo_id      = $vs_logo_id ?? 0;
$vs_logo_height  = $vs_logo_height ?? 30;
$table_rows      = $arr ?? '';
@endphp

@if ( $table_rows )
    <div class="w-full mx-auto my-12 lg:w-4/5 lg:my-20 xl:w-3/5">
        <table class="table table-striped table-borderless table-responsive-custom border border-primary md:border-0">
            <thead class="hidden md:table-row-group">
                <tr>
                    <th scope="flex-1" style="border-top-color:#fff!important;border-left-color:#fff!important;"></th>
                    <th scope="flex-1" class="text-center">
                        {!! wp_get_attachment_image( $vs_logo_id, 'medium', false, array(
                            'class' => 'w-auto mx-auto',
                            'style' => 'height:' . $vs_logo_height . 'px;',
                        ) ) !!}
                    </th>
                    <th scope="flex-1" class="text-center">
                        <img src="@asset( 'images/logo.svg' )" alt="Codefresh" class="h-5 w-auto mx-auto lazyload">
                    </th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                @if ( $table_rows )
                    @foreach ( $table_rows as $row )
                        <tr class="block md:table-row @if ( $row['highlight_row'] ) table-row-accent @endif">
                            <th scope="row" class="feature-cell block w-full text-left font-display md:table-cell md:w-auto">
                                {{ $row['feature'] }}
                            </th>
                            <td title="{{ esc_attr( $vs ) }}" class="block md:table-cell w-full text-right md:text-center md:w-1/4">
                                {!! App\compare_table_item( $row['type_vs'], $row['text_vs'] ) !!}
                            </td>
                            <td title="{{ esc_attr( 'Codefresh' ) }}" class="cf-cell block md:table-cell w-full text-right md:text-center md:w-1/4 highlight-cell">
                                {!! App\compare_table_item( $row['type_cf'], $row['text_cf'] ) !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endif
