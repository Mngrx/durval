<template>
    <div>
        <div class="margin">
            <div class="row">
            <div class="col-sm-12 text-center">
                    <h2>NOSSOS<strong> PARCEIROS</strong></h2>
            </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-4">
                        <h3><strong>A CASA</strong></h3>
                        História<br>
                        A casa hoje<br>
                        História<br>
                        História<br>
                        História<br>
                        História<br>
                        História<br>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">

                    </div>                
                </div>
            </div>
        </div>
        <GmapMap
            :center="{lat:-5.7956898, lng:-35.2083706}"
            :zoom="17.25"            
            style="width: 100%; height: 372px"
            >            
            <GmapMarker
                :position="{lat:-5.7956898, lng:-35.2083706}"
                :clickable="true"
                :draggable="true"
                @click="center={lat:-5.7956898, lng:-35.2083706}"
            />
        </GmapMap>
        <div class="row">
            <div id="assinatura" class="col-sm-12 text-center">
                <img src="mix-internet.png" alt="Logo da MixInternet" />
            </div>
        </div>       
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

#assinatura {
    height: 82px;
}

.margin {
    margin-left: 10%;
    margin-right: 10%;
}

</style>