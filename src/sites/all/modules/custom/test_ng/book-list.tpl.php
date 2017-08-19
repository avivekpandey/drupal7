<div id="book-list">

<div ng-controller="myController">
<table class="views-table cols-8">
    <thead>
      <tr>
        <th class="views-field views-field-field-picture" scope="col">  Picture       </th>
        <th class="views-field views-field-title" scope="col">          Titles         </th>
        <th class="views-field views-field-body" scope="col">           Details        </th>
        <th class="views-field views-field-field-author" scope="col">   Author         </th>
        <th class="views-field views-field-field-category" scope="col">  Category      </th>
        <th class="views-field views-field-field-publication" scope="col"> Publication </th>
        <th class="views-field views-field-nothing" scope="col">           Action(s)    </th>
        <th class="views-field views-field-php" scope="col">               Status        </th>
       </tr>
    </thead>
    <tbody>
        <tr class="odd views-row-first" ng-repeat="item in res.nodes">
            <td class="views-field views-field-field-picture">
       			<a href="{{item.node.Picture.src}}"><img typeof="foaf:Image" src="{{item.node.Picture.src}}" alt=""></a>         
       	    </td>
            <td class="views-field views-field-title">
           		<a href="{{item.node.Path}}">{{item.node.Title}}</a>  
            </td>
            <td class="views-field views-field-body">
            	<p>{{item.node.Details}}</p>
            </td>
            <td class="views-field views-field-field-author">
            	  {{item.node.Author}}
            </td>
            <td class="views-field views-field-field-category">
          		{{item.node.Category}}        
            </td>
            <td class="views-field views-field-field-publication">
            	{{item.node.Publication}}         
            </td>
             <td class="views-field views-field-field-publication">
            	      
            </td>
             <td class="views-field views-field-field-publication">
            	{{item.node.Status}}         
            </td>
           </tr>
           </tbody>
		</table>
 </div>
</div>