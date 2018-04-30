<!-- https://www.basicprimitives.com/index.php?option=com_content&view=article&id=68&Itemid=111&lang=en -->
<!-- https://www.basicprimitives.com/index.php?option=com_local&view=local&Itemid=44&lang=en -->

<?=$this->Html->script('jquery/jquery-1.9.1')?>
<?=$this->Html->script('jquery/jquery-ui-1.10.2.custom.min')?>

<?=$this->Html->script('primitives.min')?>
<?=$this->Html->css('primitives.latest')?>

<script type='text/javascript'>//<![CDATA[ 
    $(window).load(function () {
        var options = new primitives.famdiagram.Config();

//        var items = [
//            { id: 1, spouses: [2], title: "Thomas Williams", label: "Thomas Williams", description: "1, 1st husband", image: "demo/images/photos/t.png" },
//            { id: 2, title: "Mary Spencer", label: "Mary Spencer", description: "2, The Mary",image: "demo/images/photos/m.png" },
//            { id: 3, spouses: [2], title: "David Kirby", label: "David Kirby", description: "3, 2nd Husband", image: "demo/images/photos/d.png" },
//            { id: 4, parents: [1, 2], title: "Brad Williams", label: "Brad Williams", description: "4, 1st son", image: "demo/images/photos/b.png" },
//            { id: 5, parents: [2, 3], title: "Mike Kirby", label: "Mike Kirby", description: "5, 2nd son, having 2 spouses", image: "demo/images/photos/m.png"}
//        ];
        
        var items = <?= json_encode($items)?>; // Convertimos array PHP a JSON
        
        options.items = items;
        options.hasSelectorCheckbox = primitives.common.Enabled.False;

        jQuery("#basicdiagram").famDiagram(options);
    });//]]>  

</script>

<style>
    .bp-photo-frame{
        display: none;
    }
    .bp-description{
        left: 4px !important;
        width: 110px !important;
    }
</style>

<div class="page-header">
    <h2>Arbol Genealógico</h2>
</div>

<div id="basicdiagram" style="width: 100%; height: 480px;" />