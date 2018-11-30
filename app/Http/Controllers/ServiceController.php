<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceTitle;
use App\ServiceItem;
use App\ServiceIcon;

class ServiceController extends Controller
{
    // Edit functions
    public function editSectionTitle()
    {
        $serviceTitle = ServiceTitle::find(1);
        $serviceTitle->state = 1;
        $serviceTitle->save();
        return redirect()->back();
    }
    public function editSectionItem($id)
    {
        $serviceItem = ServiceItem::find($id);
        $serviceItem->state = 1;
        $serviceItem->save();
        return redirect()->back();
    }
    // Update functions
    public function updateSectionTitle(Request $request)
    {
        $this->validate($request, [
            'sectionTitle' => 'required|max:50',
        ]);

        $serviceTitle = ServiceTitle::find(1);
        $serviceTitle->content = $request->sectionTitle;
        $serviceTitle->state = 0;
        $serviceTitle->save();
        return redirect()->back();
    }
    public function updateSectionItem(Request $request, $id)
    {
        $this->validate($request, [
            'itemTitle' => 'required|max:50',
            'itemText' => 'required',
        ]);

        $icons = ServiceIcon::all();
        $serviceItem = ServiceItem::find($id);
        $serviceItem->icon = $request->itemIcon;
        foreach ($icons as $icon) {
            if($serviceItem->icon == $icon->class){
                $serviceItem->unicode = $icon->unicode;
            };
        };
        $serviceItem->title = $request->itemTitle;
        $serviceItem->text = $request->itemText;
        $serviceItem->state = 0;
        $serviceItem->save();
        return redirect()->back();
    }
    // Create function
    public function createSectionItem(Request $request)
    {
        $this->validate($request, [
            'itemTitle' => 'required|max:50',
            'itemText' => 'required',
        ]);

        $icons = ServiceIcon::all();
        $serviceItem = new ServiceItem;
        $serviceItem->icon = $request->itemIcon;
        foreach ($icons as $icon) {
            if($serviceItem->icon == $icon->class){
                $serviceItem->unicode = $icon->unicode;
            };
        };
        $serviceItem->title = $request->itemTitle;
        $serviceItem->text = $request->itemText;
        $serviceItem->save();
        return redirect()->back();
    }
    // Delete function
    public function deleteSectionItem($id)
    {
        $serviceItem = ServiceItem::find($id);
        $serviceItem->delete();
        return redirect()->back();
    }
}
