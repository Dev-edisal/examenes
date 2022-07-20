<?php

namespace App\Http\Livewire\Topic;

use App\Models\Topic;
use Livewire\Component;

class Create extends Component
{
    public Topic $topic;

    public function mount(Topic $topic)
    {
        $this->topic = $topic;
    }

    public function render()
    {
        return view('livewire.topic.create');
    }

    public function submit()
    {
        $this->validate();

        $this->topic->save();

        return redirect()->route('topics.index');
    }

    protected function rules(): array
    {
        return [
            'topic.title' => [
                'string',
                'required',
            ],
        ];
    }
}
