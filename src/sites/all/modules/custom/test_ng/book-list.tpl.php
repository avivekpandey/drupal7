<div id="book-list">

<div ng-controller="myController">
	<ul>
		<li ng-repeat="item in res.nodes">{{item.node.title}}</li>
	</ul>
</div>

</div>