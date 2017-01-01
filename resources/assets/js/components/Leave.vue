<template>
	<ul id="leaves-list" class="list-group">
		<li v-show="loading" class="list-group-item"><i  class="fa fa-spinner fa-spin"></i> Loading data</li>
		<li v-show="empty" class="list-group-item">No recent applied leave</li>
		<li class="list-group-item" v-for="leave in leaves">
			<span class="start-date">{{ leave.start }}</span>
			<span v-show="leave.end" class="end-date"> - {{ leave.end }}</span>
			<span v-if="leave.status == 'pending'"class="label label-warning pull-right">{{ leave.status }}</span>
			<span v-else-if="leave.status == 'approved'"class="label label-success pull-right">{{ leave.status }}</span>
			<span v-else-if="leave.status == 'rejected'"class="label label-danger pull-right">{{ leave.status }}</span>
		</li>
	</ul>
</template>

<script>
	export default {
		data: function () {
			return {
				loading: false,
				leaves: [],
				empty: false
			}
		},
		mounted() {
			this.fetchMemos();
		},
		methods: {
			fetchMemos: function () {
				this.loading = true;
				var res = this;
				setTimeout(function () {
					res.loading = false;
					res.leaves = [
						{
							start: '05 Jan 2017',
							end: '09 Jan 2017',
							status: 'pending'
						},
						{
							start: '05 Jan 2017',
							status: 'approved'
						},
						{
							start: '03 Jan 2017',
							status: 'rejected'
						},
					];
				}, 500);
			}
		}
	}
</script>