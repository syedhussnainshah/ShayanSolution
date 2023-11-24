<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    //
    public function index()
    {
        $TopTier = $this->TopTier();
        $ServicesWeProvide = $this->ServicesWeProvide();
        $SoftwareSolutions = $this->SoftwareSolutions();
        $HiringModel = $this->HiringModel();
        $SuccessStories = $this->SuccessStories();
        return inertia('Home', [
            'TopTier' => $TopTier->getData()->TopTier,
            'ServicesWeProvide' => $ServicesWeProvide->getData()->ServicesWeProvide,
            'SoftwareSolutions' => $SoftwareSolutions->getData()->SoftwareSolutions,
            'HiringModel' => $HiringModel->getData()->HiringModel,
            'SuccessStories' => $SuccessStories->getData()->SuccessStories,
        ]);
    }
    public function TopTier()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/TopTier.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['TopTier'])) {
                    return response()->json(['TopTier' => $data['TopTier']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function ServicesWeProvide()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/ServicesWeProvide.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['ServicesWeProvide'])) {
                    return response()->json(['ServicesWeProvide' => $data['ServicesWeProvide']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function SoftwareSolutions()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/SoftwareSolutions.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['SoftwareSolutions'])) {
                    return response()->json(['SoftwareSolutions' => $data['SoftwareSolutions']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function HiringModel()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/HiringModel.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['HiringModel'])) {
                    return response()->json(['HiringModel' => $data['HiringModel']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function SuccessStories()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/SuccessStories.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['SuccessStories'])) {
                    return response()->json(['SuccessStories' => $data['SuccessStories']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function blog()
    {
        $BlogList = $this->BlogList();
        return inertia('Blog', [
            'BlogList' => $BlogList->getData()->BlogList,
        ]);
        return inertia('Blog');
    }
    public function BlogList()
    {
        try {
            $filePath = storage_path('app/public/Json-Data/BlogList.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['BlogList'])) {
                    return response()->json(['BlogList' => $data['BlogList']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function blogDetail($id)
    {
        return inertia('SingleBlog');
    }
    public function about()
    {
        $TopTier = $this->TopTier();
        return inertia('About', [
            'TopTier' => $TopTier->getData()->TopTier,
        ]);
    }
    public function projectDetail($id)
    {
        $TopTier = $this->TopTier();
        return inertia('ProjectDetail', [
            'TopTier' => $TopTier->getData()->TopTier,
        ]);
    }
}
