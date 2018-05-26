<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">資料頁面</div>
​
                    <div class="panel-body">
                        <table class="table-striped data-table">
                            <thead>
                                <tr>
                                    <th v-if="dataset.resultData.length>0" v-for="(title,titleKey) in dataset.resultDataKey" :key="titleKey">{{ title }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="dataset.resultData.length>0" v-for="(data,dataKey) in dataset.resultData" :key="dataKey">
                                    <td v-if="dataset.resultData.length>0" v-for="(subData,subDataKey) in data" :key="subDataKey">{{ subData }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
​
<script>
    export default {
        created(){
            this.init();
        },
        data(){
            return{
                test:'qqq',
                dataset:{
                    resultData:[],
                    resultDataKey:[]
                }
            }
        },
        methods:{
            init(){
                let self = this;
                axios({
                    method: 'post',
                    url: '/Datas',
                })
                    .then(function(response){
                        if(response.data.success==true){
                            let resultData = response.data.result.records;
                            self.dataset.resultData = resultData;
                            //集合陣列的key
                            for(let i=0; i<resultData.length; i++){
                                self.dataset.resultDataKey = Object.keys(resultData[i]);
                            }
                        }
                    })
                console.log(self.dataset);
            }
        }
    }
</script>