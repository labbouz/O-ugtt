
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            مواجهة الانتهاك - الاعــــــلام
        </div>
        <?php
        $checkeds_medias = $dossier->medias->lists('id')->toArray();
        ?>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-left">
                        <div class="m-t-10"><label><strong>@lang('media.nom_categorie_1')</strong></label></div>
                    </div>
                    @foreach($medias as $media )
                        @if($media->categorie_media == 1)
                            <?php $checked = in_array($media->id, $checkeds_medias) ? true : false; ?>
                        <div class="col-lg-2 col-md-2">
                            <div class="checkbox checkbox-primary ">
                                <input id="checkbox_media_{{ $media->id }}" name="medias[]" type="checkbox" value="{{ $media->id }}"@if($checked) checked @endif>
                                <label for="checkbox_media_{{ $media->id }}"> {{ $media->nom_media }} </label>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-left">
                        <div class="m-t-10"><label><strong>@lang('media.nom_categorie_2')</strong></label></div>
                    </div>

                    @foreach($medias as $media )
                        @if($media->categorie_media == 2)
                            <?php $checked = in_array($media->id, $checkeds_medias) ? true : false; ?>
                            <div class="col-lg-2 col-md-2">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_media_{{ $media->id }}" name="medias[]" type="checkbox" value="{{ $media->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_media_{{ $media->id }}"> {{ $media->nom_media }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-left">
                        <div class="m-t-10"><label><strong>@lang('media.nom_categorie_3')</strong></label></div>
                    </div>

                    @foreach($medias as $media )
                        @if($media->categorie_media == 3)
                            <?php $checked = in_array($media->id, $checkeds_medias) ? true : false; ?>
                            <div class="col-lg-2 col-md-2">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_media_{{ $media->id }}" name="medias[]" type="checkbox" value="{{ $media->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_media_{{ $media->id }}"> {{ $media->nom_media }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-left">
                        <div class="m-t-10"><label><strong>@lang('media.nom_categorie_4')</strong></label></div>
                    </div>

                    @foreach($medias as $media )
                        @if($media->categorie_media == 4)
                            <?php $checked = in_array($media->id, $checkeds_medias) ? true : false; ?>
                            <div class="col-lg-2 col-md-2">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_media_{{ $media->id }}" name="medias[]" type="checkbox" value="{{ $media->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_media_{{ $media->id }}"> {{ $media->nom_media }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            مواجهة الانتهاك - الشكـــــاوي
        </div>
        <?php
        $checkeds_plaintes = $dossier->plaintes->lists('id')->toArray();
        ?>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="row">

                    @foreach($plaintes as $plainte )
                        <?php $checked = in_array($plainte->id, $checkeds_plaintes) ? true : false; ?>
                        @if($plainte->categorie_plainte == 1)
                            <div class="col-lg-4 col-md-4">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_plainte_{{ $plainte->id }}" name="plaintes[]" type="checkbox" value="{{ $plainte->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_plainte_{{ $plainte->id }}"> {{ $plainte->nom_plainte }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row">
                    @foreach($plaintes as $plainte )
                        <?php $checked = in_array($plainte->id, $checkeds_plaintes) ? true : false; ?>
                        @if($plainte->categorie_plainte == 2)
                            <div class="col-lg-4 col-md-4">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_plainte_{{ $plainte->id }}" name="plaintes[]" type="checkbox" value="{{ $plainte->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_plainte_{{ $plainte->id }}"> {{ $plainte->nom_plainte }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>


                <div class="row">
                    @foreach($plaintes as $plainte )
                        <?php $checked = in_array($plainte->id, $checkeds_plaintes) ? true : false; ?>
                        @if($plainte->categorie_plainte == 3)
                            <div class="col-lg-4 col-md-4">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_plainte_{{ $plainte->id }}" name="plaintes[]" type="checkbox" value="{{ $plainte->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_plainte_{{ $plainte->id }}"> {{ $plainte->nom_plainte }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row">
                    @foreach($plaintes as $plainte )
                        <?php $checked = in_array($plainte->id, $checkeds_plaintes) ? true : false; ?>
                        @if($plainte->categorie_plainte == 4)
                            <div class="col-lg-4 col-md-4">
                                <div class="checkbox checkbox-primary ">
                                    <input id="checkbox_plainte_{{ $plainte->id }}" name="plaintes[]" type="checkbox" value="{{ $plainte->id }}"@if($checked) checked @endif>
                                    <label for="checkbox_plainte_{{ $plainte->id }}"> {{ $plainte->nom_plainte }} </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            مواجهة الانتهاك - التحركات
        </div>
        <?php
        $checkeds_moves = $dossier->moves->lists('id')->toArray();
        ?>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                @foreach($moves as $move)
                    <?php $checked = in_array($move->id, $checkeds_moves) ? true : false; ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox_move_{{ $move->id }}" name="moves[]" type="checkbox" value="{{ $move->id }}"@if($checked) checked @endif>
                            <label for="checkbox_move_{{ $move->id }}"> {{ $move->nom_move }} </label>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            النتيجـــة
        </div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <?php
                $checked_oui = null;
                $checked_non = null;
                if($dossier->settlement_status== 1) {
                    $checked_oui = true;
                }else {
                    $checked_non = true;
                }
                ?>
                <div class="col-md-12">
                    <div class="radio radio-success">
                        {{  Form::radio('settlement_status', 1, $checked_oui, ['id'=>'settlement_status_oui']) }}
                        {{ Form::label('settlement_status_oui',  'تسوية الوضعية', array('class' => 'control-label')) }}
                    </div>

                    <div class="radio radio-danger">
                        {{  Form::radio('settlement_status', 0, $checked_non, ['id' => 'settlement_status_non']) }}
                        {{ Form::label('settlement_status_non', 'عدم تسوية الوضعية', array('class' => 'control-label')) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            ملاحظات (وصف وجيز للوضع النهائي للانتهاك)
        </div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="col-md-12">
                    {{  Form::textarea('remarque',$dossier->remarque,['class'=>'form-control', 'rows' => 5, 'autocomplete' => "off"]) }}
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::hidden('societe_id', $dossier->societe_id) }}
<div class="col-md-12">

    <div class="panel panel-info">
        <button type="submit" class="btn btn-block btn-info btn-lg">تسجيل</button>

    </div>

</div>